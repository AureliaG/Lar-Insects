<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FriendsController extends Controller
{
    public function showAllUsers() {
      $allUsers = User::All();

      return view('Friends', ['allUsers' => $allUsers]);
    }
}
