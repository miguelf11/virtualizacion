<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('descr')->nullable();
            $table->enum('type', ['In', 'Out']);             
            $table->string('drive_id')->nullable();        // ID del archivo en Drive             
            $table->unsignedInteger('tarea_id');           // foreign key => tareas
            $table->unsignedInteger('archivo_prod_id');    // foreign key => archivos_produccion
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
        Schema::dropIfExists('archivos');
    }
}
