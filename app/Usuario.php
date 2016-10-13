<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	public function lecciones()
    {
        return $this->belongsToMany('App\Leccion');
    }

    public function tareas()
    {
        return $this->hasMany('App\Tarea');
    }

	public function rol()
    {
        return $this->belongsTo('App\Rol');
    }
}
