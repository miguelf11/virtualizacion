<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTareasTable extends Migration
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
            $table->enum('type', ['conceptualizacion', 'produccion']);
            $table->enum('status', ['activa', 'completada']);
            $table->unsignedInteger('t_prod_id');            // foreign key => tareas_produccion
            $table->unsignedInteger('leccion_id');           // foreign key => lecciones
            $table->unsignedInteger('user_id');              // foreign key => users           
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
