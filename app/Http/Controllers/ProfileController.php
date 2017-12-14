<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelsDescription;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

  public function postInfoForm(Request $request) {

    $description = new ModelsDescription();

    $description->age = $request['age'];
    $description->famille = $request['tribu'];
    $description->race = $request['race'];
    $description->nourriture = $request['nourriture'];
    $description->name = $request['name'];

    $request->user()->descriptions()->save($description);

    return redirect()->route('home');

  }

}
