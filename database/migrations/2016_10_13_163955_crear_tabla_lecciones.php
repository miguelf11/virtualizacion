<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaLecciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descr');
            $table->unsignedInteger('lista_tareas_id');     // foreign key => lista_tareas
            $table->unsignedInteger('asignatura_id');       // foreign key => asignaturas
            $table->unsignedInteger('leccion_estados_id');  // foreign key => leccion_estados
            $table->unsignedInteger('usuario_id');          // foreign key => usuarios
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
        Schema::dropIfExists('lecciones');
    }
}
