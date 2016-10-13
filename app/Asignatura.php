<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{	
    public function carreras()
    {
        return $this->belongsToMany('App\Carrera');
    }

	public function lecciones()
    {
        return $this->belongsToMany('App\Leccion');
    }
}
