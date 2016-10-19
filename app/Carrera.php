<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{   

	protected $table = 'carreras';

	protected $fillable = ['name','type'];

    public function cursos()
    {
        return $this->hasMany('App\Curso');
    }
}
