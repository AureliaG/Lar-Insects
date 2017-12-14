<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelsDescription;
use Illuminate\Support\Facades\Auth;
use DB;

class ProfileController extends Controller
{
  public function postInfoForm(Request $request) {

    $connectedUser= Auth::user()->id;

    $newDesc = ModelsDescription::where('user_id', '=', $connectedUser)->first();

    $newDesc->age = $request['age'];
    $newDesc->famille = $request['tribu'];
    $newDesc->race = $request['race'];
    $newDesc->nourriture = $request['nourriture'];
    $newDesc->name = $request['name'];

    $newDesc->save();

    return redirect()->route('home');
  }

  public function createUserInfo(Request $request) {

    $description = new ModelsDescription();

    $description->age = '0';
    $description->famille = 'Votre famille';
    $description->race = 'Votre race';
    $description->nourriture = 'Votre nourriture';
    $description->name = 'Votre nom';

    $request->user()->descriptions()->save($description);

    return redirect()->route('home');

  }

}
