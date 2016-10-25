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
            array('id' => 1,
                  'num'=> 1,
                  'status' => 'Activo',	    
                  'tarea_id' => 1, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),      
            array('id' => 2,
                  'num'=> 1,
                  'status' => 'Activo',	    
                  'tarea_id' => 2, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),
            array('id' => 3,
                  'num'=> 1,
                  'status' => 'Finalizado',	    
                  'tarea_id' => 3, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),
            array('id' => 4,
                  'num'=> 2,
                  'status' => 'Activo',	    
                  'tarea_id' => 3, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),            
            array('id' => 5,
                  'num'=> 1,
                  'status' => 'Activo',	    
                  'tarea_id' => 4, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),
            array('id' => 6,
                  'num'=> 1,
                  'status' => 'Finalizado',	    
                  'tarea_id' => 5, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),
            array('id' => 7,
                  'num'=> 2,
                  'status' => 'Finalizado',	    
                  'tarea_id' => 5, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),            
            array('id' => 8,
                  'num'=> 1,
                  'status' => 'Finalizado',	    
                  'tarea_id' => 6, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),                                       
            array('id' => 9,
                  'num'=> 2,
                  'status' => 'Finalizado',	    
                  'tarea_id' => 6, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),                           
            array('id' => 10,
                  'num'=> 3,
                  'status' => 'Finalizado',	    
                  'tarea_id' => 6, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),                           
            array('id' => 11,
                  'num'=> 4,
                  'status' => 'Finalizado',	    
                  'tarea_id' => 6, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),              
            array('id' => 12,
                  'num'=> 1,
                  'status' => 'Finalizado',	    
                  'tarea_id' => 7, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),
            array('id' => 13,
                  'num'=> 2,
                  'status' => 'Finalizado',	    
                  'tarea_id' => 7, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),                   
            array('id' => 14,
                  'num'=> 3,
                  'status' => 'Finalizado',	    
                  'tarea_id' => 7, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            ),                   
            array('id' => 15,
                  'num'=> 4,
                  'status' => 'Finalizado',	    
                  'tarea_id' => 7, 	                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
            )                                                                                             
        );
		DB::table('intentos')->insert($intentos);                         
    }
}

