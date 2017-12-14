<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nourriture extends Model
{
    function user() {
      $this->belongsTo('App\Models\User');
    }
}
