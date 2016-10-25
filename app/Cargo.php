<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{

	protected $table = 'cargos';

	protected $fillable = ['name','descr','rol'];

    public function users()
    {
        return $this->hasMany('App\Users');
    }

	public function tareas_prod()
    {
        return $this->hasMany('App\TareasProduccion');
    }
}
