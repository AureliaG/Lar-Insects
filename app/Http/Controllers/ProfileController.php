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

    $age = date("Y-m-d", strtotime(str_replace('/', '-', $request['age'])));

    $newDesc->age = $age;
    $newDesc->famille = $request['tribu'];
    $newDesc->race = $request['race'];
    $newDesc->nourriture = $request['nourriture'];
    $newDesc->name = $request['name'];

    $newDesc->save();

    return redirect()->route('home.modif');
  }

  public function createUserInfo(Request $request) {

    $description = new ModelsDescription();

    $description->age = NULL;
    $description->famille = NULL;
    $description->race = NULL;
    $description->nourriture = NULL;
    $description->name = NULL;
    $description->name = NULL;

    $request->user()->descriptions()->save($description);

    return redirect()->route('home.modif');

  }
  
}
