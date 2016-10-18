<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{	
    public function users()
    {
        return $this->hasMany('App\Users');
    }

	public function tareas_prod()
    {
        return $this->hasMany('App\TareasProduccion');
    }
}
