<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NourritureController extends Controller
{

  public function addAliments(){
      $pucerons = new Nouriture();
      $pucerons->nourriture = 'Pucerons';
      $pucerons->save();

      $plantes = new Nouriture();
      $plantes->nourriture = 'Plantes';
      $plantes->save();

      $herbe = new Nouriture();
      $herbe->nourriture = 'Herbe';
      $herbe->save();

      $mais = new Nouriture();
      $mais->nourriture = 'Maïs';
      $mais->save();

      $moucherons = new Nouriture();
      $moucherons->nourriture = 'Moucherons';
      $moucherons->save();
  }
}
