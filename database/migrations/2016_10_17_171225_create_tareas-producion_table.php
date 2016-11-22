<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTareasProducionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas_produccion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('descr')->nullable();
            $table->enum('type', ['Accion', 'Asignacion', 'Revision']);
            $table->unsignedInteger('cargo_id');                  // foreign key => cargos                        
            $table->unsignedInteger('arch_in_id')->nullable();    // foreign key => archivos_produccion 
            $table->unsignedInteger('arch_out_id')->nullable();   // foreign key => archivos_produccion
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
        Schema::dropIfExists('tareas_produccion');
    }
}
