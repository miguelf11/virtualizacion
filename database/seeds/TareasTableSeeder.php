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
            array('id' => 100,
                  'type'=>'Produccion',
                  'status' => 'Activa',	    
                  't_prod_id' => 8, 	// Realizar animaciones de laminas                
                  'user_id' => 100,       // @sincronizador                   
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 200,
                  'type'=>'Produccion',
                  'status' => 'En Revision',	    
                  't_prod_id' => 8,    // Realizar animaciones de laminas
                  'user_id' => 100,      // @sincronizador                
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 300,
                  'type'=>'Produccion',
                  'status' => 'Modificar',	    
                  't_prod_id' => 10,   // Generar HTML5                   
                  'user_id' => 100,      // @sincronizador                
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 400,
                  'type'=>'Produccion',
                  'status' => 'Por Aprobar',	    
                  't_prod_id' => 8,    // Realizar animaciones de laminas                 
                  'user_id' => 100,      // @sincronizador                
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),                             
            array('id' => 500,
                  'type'=>'Produccion',
                  'status' => 'Aprobada',     
                  't_prod_id' => 8,    // Realizar animaciones de laminas
                  'user_id' => 100,      // @sincronizador                
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 600,
                  'type'=>'Produccion',
                  'status' => 'Aprobada',     
                  't_prod_id' => 10,   // Generar HTML5                   
                  'user_id' => 100,      // @sincronizador                
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 700,
                  'type'=>'Produccion',
                  'status' => 'Aprobada',     
                  't_prod_id' => 8,    // Realizar animaciones de laminas                 
                  'user_id' => 100,      // @sincronizador                
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),                    
        );

        DB::table('tareas')->insert($tareas);
    }
}  