<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelsDescription extends Model
{
    protected $table = 'models_descriptions';

    protected $fillable= [
    'slug','age','tribu','race','nourriture','name'
    ];

    function user() {
      return $this->belongsTo('App\Models\User');
    }


}
