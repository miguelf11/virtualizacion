<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observacion extends Model
{
	protected $table = 'observaciones';
	
    public function intento()
    {
        return $this->belongsTo('App\Intento');
    }
}
