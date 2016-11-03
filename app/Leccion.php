<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leccion extends Model
{
    protected $table = 'lecciones';

    protected $fillable = ['name','code','status','audio','t_actual_id','t_actual_2_id','curso_id'];

	public function curso()
    {
        return $this->belongsTo('App\Curso');
    }	

	public function tareas()
    {
        return $this->hasMany('App\Tarea');
    }

	public function users()
    {
        return $this->belongsToMany('App\User');
    }

	public function t_actual()
    {
        return $this->belongsTo('App\TareasProduccion');
    }

    public function t_actual_2()
    {
        return $this->belongsTo('App\TareasProduccion');
    }
}
