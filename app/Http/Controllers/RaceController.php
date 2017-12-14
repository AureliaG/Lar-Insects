<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Race;

class RaceController extends Controller
{
      public function show() {

        $races = Races::all()->get();
        return redirect()->route('home');

    }
}
