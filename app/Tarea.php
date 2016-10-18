<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    public function leccion()
    {
        return $this->belongsTo('App\Leccion');
    }

    public function archivos()
    {
        return $this->hasMany('App\Archivo');
    }    

    public function intentos()
    {
        return $this->hasMany('App\Intento');
    }    

    public function alertas()
    {
        return $this->hasMany('App\Alerta');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

	public function t_prod()
    {
        return $this->belongsTo('App\TareasProduccion');
    }

}
