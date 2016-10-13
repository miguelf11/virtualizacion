<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    public function leccion()
    {
        return $this->belongsTo('App\Leccion');
    }

    public function estado()
    {
        return $this->belongsTo('App\TareaEstado', 'tarea_estados_id');
    }	

	public function which()
    {
        return $this->belongsTo('App\ListaTareas', 'lista_tareas_id');
    }

	public function usuario()
    {
        return $this->belongsTo('App\Usuario');
    }

    public function recursos()
    {
        return $this->hasMany('App\Recurso');
    }
}
}
