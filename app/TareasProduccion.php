<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TareasProduccion extends Model
{
	protected $table = 'tareas_produccion';

    public function cargo()
    {
        return $this->belongsTo('App\Cargo');
    }

    public function arch_in()
    {
        return $this->belongsTo('App\ArchivosProduccion');
    }

	public function arch_out()
    {
        return $this->belongsTo('App\ArchivosProduccion');
    }
}
