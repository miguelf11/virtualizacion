<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Tarea extends Model
{

    protected $table = "tareas";

    protected $fillable = ['type','status','t_prod_id','leccion_id','user_id','path_in','path_out'];


    public function leccion()
    {
        return $this->belongsTo('App\Leccion');
    }

    public function archivos()
    {
        return $this->hasMany('App\Archivo');
    }    

    public function intentos()
    {
        return $this->hasMany('App\Intento');
    }    

    public function user()
    {
        return $this->belongsTo('App\User');
    }

	public function t_prod()
    {
        return $this->belongsTo('App\TareasProduccion');
    }

    public function alertas()
    {
        return $this->hasManyThrough('App\Alerta', 'App\Intento');
    }

    public function observaciones()
    {
        return $this->hasManyThrough('App\Observacion', 'App\Intento');
    }

    public function setPath_outAttribute($path_out){
        $this->attributes['path_out'] = Carbon::now()->second.$path_out->getClientOriginalName();
        $name = Carbon::now()->second.$path_out->getClientOriginalName();
        \Storage::disk('local')->put($name, \File::get($path_out));
    }

    public function setPath_inAttribute($path_in){
        $this->attributes['path_in'] = Carbon::now()->second.$path_in->getClientOriginalName();
        $name = Carbon::now()->second.$path_in->getClientOriginalName();
        \Storage::disk('local')->put($name, \File::get($path_in));
    }

}
