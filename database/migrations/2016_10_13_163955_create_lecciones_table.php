<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeccionesTable extends Migration
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
            $table->string('name');
            $table->string('code')->nullable();
            $table->enum('status', ['Activa', 'Completada']);
            $table->boolean('audio');
            $table->unsignedInteger('t_actual_id')->nullable();     // foreign key => tareas_produccion
            $table->unsignedInteger('t_actual_2_id')->nullable();   // foreign key => tareas_produccion
            $table->unsignedInteger('curso_id');                    // foreign key => cursos           
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
