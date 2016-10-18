<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
	public function tarea()
    {
        return $this->belongsTo('App\Tarea');
    }

    public function archivo_prod()
   	{
        return $this->belongsTo('App\ArchivosProduccion');
   	}
}