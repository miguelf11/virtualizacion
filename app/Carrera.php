<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{	
	public function asignaturas()
    {
        return $this->belongsToMany('App\Asignatura');
    }
}
