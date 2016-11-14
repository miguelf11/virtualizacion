<?php

use Illuminate\Database\Seeder;

class AlertasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alertas = array(
            array('id' => 100,                  
                  'title' => 'Alerta Automatica',	    
                  'data' => 'Faltan 2 dias para que finalice el tiempo promedio asociado a esta tarea!',
                  'intento_id' => 100, 
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),      
            array('id' => 200,
                  'title' => 'Alerta Automatica',	    
                  'data' => 'Falta 1 dia para que finalice el tiempo promedio asociado a esta tarea!',
                  'intento_id' => 400, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),
            array('id' => 300,
                  'title' => 'Alerta Automatica',	    
                  'data' => 'Tiempo promedio de completacion ha terminado!',
                  'intento_id' => 400,	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),
        );
		DB::table('alertas')->insert($alertas);                                     
    }
}