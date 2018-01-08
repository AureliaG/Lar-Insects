<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
      function user() {
        return $this->belongsTo('App\Models\User');
      }

}
