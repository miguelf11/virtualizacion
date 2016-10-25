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

    public function user()
    {
        return $this->belongsTo('App\User');
    }

	public function t_prod()
    {
        return $this->belongsTo('App\TareasProduccion');
    }

    public function alertas()
    {
        return $this->hasManyThrough('App\Alerta', 'App\Intento');
    }

    public function observaciones()
    {
        return $this->hasManyThrough('App\Observacion', 'App\Intento');
    }

}
