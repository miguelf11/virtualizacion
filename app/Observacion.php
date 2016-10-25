<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observacion extends Model
{
    public function intento()
    {
        return $this->belongsTo('App\Intento');
    }
}
