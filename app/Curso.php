<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{	
    public function carrera()
    {
        return $this->belongsTo('App\Carrera');
    }

	public function lecciones()
    {
        return $this->hasMany('App\Leccion');
    }
}
