<?php

use Illuminate\Database\Seeder;

class TareasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tareas = array(
            array('id' => 1,
                  'type'=>'Produccion',
                  'status' => 'Activa',	    
                  't_prod_id' => 8, 	// Realizar animaciones de laminas                
                  'user_id' => 1,       // @sincronizador                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 2,
                  'type'=>'Produccion',
                  'status' => 'En Revision',	    
                  't_prod_id' => 8,    // Realizar animaciones de laminas
                  'user_id' => 1,      // @sincronizador                
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 3,
                  'type'=>'Produccion',
                  'status' => 'Modificar',	    
                  't_prod_id' => 10,   // Generar HTML5                   
                  'user_id' => 1,      // @sincronizador                
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 4,
                  'type'=>'Produccion',
                  'status' => 'Por Aprobar',	    
                  't_prod_id' => 8,    // Realizar animaciones de laminas                 
                  'user_id' => 1,      // @sincronizador                
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),                             
            array('id' => 5,
                  'type'=>'Produccion',
                  'status' => 'Aprobada',     
                  't_prod_id' => 8,    // Realizar animaciones de laminas
                  'user_id' => 1,      // @sincronizador                
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 6,
                  'type'=>'Produccion',
                  'status' => 'Aprobada',     
                  't_prod_id' => 10,   // Generar HTML5                   
                  'user_id' => 1,      // @sincronizador                
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 7,
                  'type'=>'Produccion',
                  'status' => 'Aprobada',     
                  't_prod_id' => 8,    // Realizar animaciones de laminas                 
                  'user_id' => 1,      // @sincronizador                
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),                    
        );

        DB::table('tareas')->insert($tareas);
    }
}  