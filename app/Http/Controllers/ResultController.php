<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
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
        $rooms = Auth::user()->rooms;
        if($rooms->count() == 0) {
            flash('É obrigatório cadastrar pelo menos um cômodo')->error();
            return redirect()->route('rooms.index');
        }

        return view('pages.result', [
            'colors' => Auth::user()->colors,
            'user' => Auth::user()
        ]);
    }
}
