<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTareas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->increments('id');            
            $table->unsignedInteger('lista_tareas_id');      // foreign key => lista_tareas
            $table->unsignedInteger('leccion_id');           // foreign key => lecciones
            $table->unsignedInteger('usuario_id');           // foreign key => usuarios
            $table->unsignedInteger('tarea_estados_id');     // foreign key => tarea_estados
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tareas');
    }
}
