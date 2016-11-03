<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
	protected $table = 'cursos';

	protected $fillable = ['name','code'];

    public function carrera()
    {
        return $this->belongsToMany('App\Carrera');
    }

	public function lecciones()
    {
        return $this->hasMany('App\Leccion');
    }
}
