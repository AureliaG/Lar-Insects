<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nourriture;


class NourritureController extends Controller
{

    public function show() {

      $nourritures = Nourriture::all()->get();
      return redirect()->route('home');

    }

}
