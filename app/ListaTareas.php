<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListaTareas extends Model
{
	protected $table = 'lista_tareas';

    public function rol()
    {
        return $this->belongsTo('App\Rol');
    }
}
