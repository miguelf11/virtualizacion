<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TareaEstado extends Model
{
	protected $table = 'tarea_estados';

    public function tareas()
    {
        return $this->hasMany('App\Tareas');
    }
}
