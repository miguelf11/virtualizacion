<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leccion extends Model
{
	public function asignaturas()
    {
        return $this->belongsToMany('App\Asignatura');
    }

	public function estado()
    {
        return $this->belongsTo('App\LeccionEstado', 'leccion_estados_id');
    }	

	public function tareas()
    {
        return $this->hasMany('App\Tarea');
    }

	public function usuarios()
    {
        return $this->belongsToMany('App\Usuario');
    }

	public function tarea_actual()
    {
        return $this->belongsTo('App\ListaTareas', 'lista_tareas_id');
    }
}
