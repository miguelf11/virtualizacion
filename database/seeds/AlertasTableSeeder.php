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
            array('id' => 1,                  
                  'title' => 'Alerta Automatica',	    
                  'data' => 'Faltan 2 dias para que finalice el tiempo promedio asociado a esta tarea!',
                  'intento_id' => 1, 
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),      
            array('id' => 2,
                  'title' => 'Alerta Automatica',	    
                  'data' => 'Faltan 2 dias para que finalice el tiempo promedio asociado a esta tarea!',
                  'intento_id' => 4, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),
            array('id' => 3,
                  'title' => 'Alerta Automatica',	    
                  'data' => 'Tiempo promedio de completacion ha terminado!',
                  'intento_id' => 4,	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),
        );
		DB::table('alertas')->insert($alertas);                                     
    }
}