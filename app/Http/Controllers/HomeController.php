<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nourriture;
use App\Models\Race;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $races = Race::All();
        $nourritures = Nourriture::All();

        return view('home', ['nourritures' => $nourritures], ['races' => $races]);
    }
}
