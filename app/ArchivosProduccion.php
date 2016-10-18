<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArchivosProduccion extends Model
{
   	protected $table = 'archivos_produccion';

   	public function arch_in()
   	{
        return $this->belongsTo('App\TareasProduccion');
   	}

   	public function arch_out()
   	{
        return $this->belongsTo('App\TareasProduccion');
   	}
}
