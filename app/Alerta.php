<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerta extends Model
{
    public function intento()
    {
        return $this->belongsTo('App\Intento');
    }
}
