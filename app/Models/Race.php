<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
      function user() {
        $this->belongsTo('App\Models\User');
      }

}
