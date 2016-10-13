<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    public function usuarios()
    {
        return $this->hasMany('App\Usuario');
    }

	public function tareas()
    {
        return $this->hasMany('App\Tarea');
    }
}
