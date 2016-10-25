<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intento extends Model
{
    public function tarea()
    {
        return $this->belongsTo('App\Tarea');
    }

    public function alertas()
    {
        return $this->hasMany('App\Alerta');
    }

    public function observaciones()
    {
        return $this->hasMany('App\Observacion');
    }
}
