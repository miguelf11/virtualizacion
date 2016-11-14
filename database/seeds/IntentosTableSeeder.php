<?php

use Illuminate\Database\Seeder;

class IntentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $intentos = array(
            array('id' => 100,
                  'num'=> 1,
                  'status' => 'Activo',	    
                  'tarea_id' => 100, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),      
            array('id' => 200,
                  'num'=> 1,
                  'status' => 'Activo',	    
                  'tarea_id' => 200, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),
            array('id' => 300,
                  'num'=> 1,
                  'status' => 'Finalizado',	    
                  'tarea_id' => 300, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),
            array('id' => 400,
                  'num'=> 2,
                  'status' => 'Activo',	    
                  'tarea_id' => 300, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),            
            array('id' => 500,
                  'num'=> 1,
                  'status' => 'Activo',	    
                  'tarea_id' => 400, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),
            array('id' => 600,
                  'num'=> 1,
                  'status' => 'Finalizado',	    
                  'tarea_id' => 500, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),
            array('id' => 700,
                  'num'=> 2,
                  'status' => 'Finalizado',	    
                  'tarea_id' => 500, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),            
            array('id' => 800,
                  'num'=> 1,
                  'status' => 'Finalizado',	    
                  'tarea_id' => 600, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),                                       
            array('id' => 900,
                  'num'=> 2,
                  'status' => 'Finalizado',	    
                  'tarea_id' => 600, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),                           
            array('id' => 1000,
                  'num'=> 3,
                  'status' => 'Finalizado',	    
                  'tarea_id' => 600, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),                           
            array('id' => 1100,
                  'num'=> 4,
                  'status' => 'Finalizado',	    
                  'tarea_id' => 600, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),              
            array('id' => 1200,
                  'num'=> 1,
                  'status' => 'Finalizado',	    
                  'tarea_id' => 700, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),
            array('id' => 1300,
                  'num'=> 2,
                  'status' => 'Finalizado',	    
                  'tarea_id' => 700, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),                   
            array('id' => 1400,
                  'num'=> 3,
                  'status' => 'Finalizado',	    
                  'tarea_id' => 700, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),                   
            array('id' => 1500,
                  'num'=> 4,
                  'status' => 'Finalizado',	    
                  'tarea_id' => 700, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            )                                                                                             
        );
		DB::table('intentos')->insert($intentos);                         
    }
}

