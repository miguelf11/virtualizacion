<?php

use Illuminate\Database\Seeder;

class LeccionUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$leccionesusers = array(
            array('leccion_id' => 100, 
                  'user_id' => 200,    // @jefe-dpa                                     
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('leccion_id' => 100, 
                  'user_id' => 300,    // @jefe-dm                                    
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),            
            array('leccion_id' => 100, 
                  'user_id' => 500,    // @edumático                                    
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),                  
            array('leccion_id' => 100, 
                  'user_id' => 100,    // @sincronizador
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),                  


            array('leccion_id' => 200, 
                  'user_id' => 200,    // @jefe-dpa                                     
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('leccion_id' => 200, 
                  'user_id' => 300,    // @jefe-dm                                    
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),            
            array('leccion_id' => 200, 
                  'user_id' => 500,    // @edumático                                    
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),            
            array('leccion_id' => 200, 
                  'user_id' => 100,    // @sincronizador
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),                  


            array('leccion_id' => 300, 
                  'user_id' => 200,    // @jefe-dpa                                     
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('leccion_id' => 300, 
                  'user_id' => 300,    // @jefe-dm                                    
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),            
            array('leccion_id' => 300, 
                  'user_id' => 500,    // @edumático                                    
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),            
            array('leccion_id' => 300, 
                  'user_id' => 100,    // @sincronizador
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),                  


            array('leccion_id' => 400, 
                  'user_id' => 200,    // @jefe-dpa                                     
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('leccion_id' => 400, 
                  'user_id' => 300,    // @jefe-dm                                    
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),            
            array('leccion_id' => 400, 
                  'user_id' => 500,    // @edumático                                    
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),            
            array('leccion_id' => 400, 
                  'user_id' => 100,    // @sincronizador
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),                  


            array('leccion_id' => 500, 
                  'user_id' => 200,    // @jefe-dpa                                     
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('leccion_id' => 500, 
                  'user_id' => 300,    // @jefe-dm                                    
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),            
            array('leccion_id' => 500, 
                  'user_id' => 500,    // @edumático                                    
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),            
            array('leccion_id' => 500, 
                  'user_id' => 100,    // @sincronizador
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 )                              
        );
        DB::table('leccion_user')->insert($leccionesusers);    
    }
}
