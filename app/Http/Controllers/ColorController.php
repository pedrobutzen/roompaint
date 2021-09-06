<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ColorController extends Controller
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
        return view('pages.colors.index', [
            'colors' => Auth::user()->colors
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
        // Só deixa o usuário avançar no fluxo caso já tenha alguma cor cadastrada
        if($request->has('next') && 
            is_null($request->get('name')) && 
            Auth::user()->colors->count() > 0)
            return redirect()->route('rooms.index');

        $request->validate([
            'name' => 'required',
        ], [], [
            'name' => 'cor',
        ]);

        Auth::user()->colors()->create($request->only('name'));

        flash('Cor cadastrada com sucesso')->success();

        return redirect()
            ->route($request->has('next') ? 'rooms.index' : 'colors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $color = Auth::user()->colors()->find($id);

        if(!$color) {
            flash('Cor não encontrada')->error();

            return redirect()
                ->route('colors.index');
        }

        Room::destroy($color->walls->pluck('room_id'));
        $color->delete();

        return redirect()
            ->route('colors.index');
    }
}
