<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors = Auth::user()->colors;

        if($colors->count() == 0) {
            flash('É obrigatório cadastrar pelo menos uma cor')->error();
            return redirect()->route('colors.index');
        }

        return view('pages.rooms.index', [
            'colors' => $colors->pluck('name', 'id'),
            'rooms' => Auth::user()->rooms
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Só deixa o usuário avançar no fluxo caso já tenha algum cômodo cadastrado
        if($request->has('next') && 
            count(array_filter($request->except(['next', '_token']))) == 0 && 
            Auth::user()->rooms->count() > 0)
            return redirect()->route('result');

        $rules = ['name' => 'required'];
        $labels = ['name' => 'nome'];

        // itera por todos os inputs das 4 paredes
        foreach (['top', 'left', 'right', 'bottom'] as $direction) {
            $rules['height-' . $direction] = [
                'required', 
                'numeric', 
                'min:2.2', // o altura da parede deve ser, no mínimo, 30 centímetros maior que a altura da porta.
                function($attribute, $value, $fail) use ($request) {
                    // pega a direção da parede
                    $direction = explode('-', $attribute)[1];

                    // calcula a área de 1 janela e 1 porta
                    $areaWindow = 2.00 * 1.20;
                    $areaDoor = 0.80 * 1.90;

                    // calcula a área da parede
                    $totalAreaWall = $request->get('height-' . $direction) * $request->get('width-' . $direction);
                    
                    // calcula a área de todas as janelas e portas
                    $areaWindowsAndDoors = ($areaWindow * $request->get('windows-' . $direction)) + ($areaDoor * $request->get('doors-' . $direction));
                    
                    // checa se área de todas as portas e janelas é maior que 50% da área da parede
                    if ($areaWindowsAndDoors > ($totalAreaWall / 2)) {
                        $fail('O total de área das portas e janelas deve ser no máximo 50% da área de parede.');
                    }
                },
            ];

            // popula array de regras de validação das 4 paredes
            $rules['width-' . $direction] = 'required|numeric|max:15|min:1';
            $rules['windows-' . $direction] = 'required|integer|min:0';
            $rules['doors-' . $direction] = 'required|integer|min:0';
            $rules['color-' . $direction] = 'required|exists:colors,id';

            // popula array de labels das 4 paredes
            $labels['height-' . $direction] = 'altura';
            $labels['width-' . $direction] = 'largura';
            $labels['windows-' . $direction] = 'janela';
            $labels['doors-' . $direction] = 'portas';
            $labels['color-' . $direction] = 'cor';
        }

        $request->validate($rules, [], $labels);

        $room = Auth::user()->rooms()->create($request->only('name'));

        foreach (['top', 'left', 'right', 'bottom'] as $direction) {
            $room->walls()->create([
                'direction' => $direction,
                'height' => $request->get('height-' . $direction),
                'width' => $request->get('width-' . $direction),
                'windows' => $request->get('windows-' . $direction),
                'doors' => $request->get('doors-' . $direction),
                'color_id' => $request->get('color-' . $direction),
            ]);
        }

        flash('Cômodo cadastrado com sucesso')->success();

        return redirect()
            ->route($request->has('next') ? 'result' : 'rooms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Auth::user()->rooms()->find($id);

        if(!$room) {
            flash('Cômodo não encontrado')->error();

            return redirect()
                ->route('rooms.index');
        }

        $room->delete();

        return redirect()
            ->route('rooms.index');
    }
}
