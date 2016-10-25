<?php

use Illuminate\Database\Seeder;

class CarrerasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carreras = array(
            'id' => 1,
            'name'=>'Administracion de Empresas',
            'type' => 'Tecnologico',	    
            'created_at' => date('Y-m-d G:i:s'), 
            'updated_at' => date('Y-m-d G:i:s')
        );
        DB::table('carreras')->insert($carreras);
    }
}




            