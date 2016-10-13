<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeccionEstado extends Model
{
	protected $table = 'leccion_estados';

    public function lecciones()
    {
        return $this->hasMany('App\Leccion');
    }
}
