<?php

use Illuminate\Database\Seeder;

class ObservacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $observaciones = array(
            array('id' => 1,                  
                  'title' => 'Observacion Tecnica',	    
                  'data' => 'El documento HTML5 presenta fallas de presentacion en ...',
                  'intento_id' => 4, 
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),
            array('id' => 2,                  
                  'title' => 'Observacion Tecnica',     
                  'data' => 'El documento HTML5 presenta fallas de presentacion en ...',
                  'intento_id' => 1, 
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            )            
        );
		DB::table('observaciones')->insert($observaciones);                                     
    }
}            