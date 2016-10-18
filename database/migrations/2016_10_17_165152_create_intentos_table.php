<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intentos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('num');
            $table->string('remarks')->nullable();
            $table->enum('status', ['activa', 'en-revision', 'modificar', 'en-correccion', 'por-aprobar','aprobada']);
            $table->unsignedInteger('tarea_id');       // foreign key => tareas         
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
        Schema::dropIfExists('intentos');
    }
}
