<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NourritureController extends Controller
{

    public function show() {

      Nourriture::all();

    }

}
