<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerta extends Model
{
    public function tarea()
    {
        return $this->belongsTo('App\Tarea');
    }
}
