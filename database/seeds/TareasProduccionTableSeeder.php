<?php

use Illuminate\Database\Seeder;

class TareasProduccionTableSeeder extends Seeder
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
                  'name'=>'Asignar Tecnico de Audio',
                  'cargo_id' => 2,	    // jefe-dpa
                  'arch_in_id' => 1,    // Guion Audio  
                  'arch_out_id' => 1,   // Guion Audio
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 2,
                  'name'=>'Generar cortes de audio',
                  'cargo_id' => 6,	    // tecnico-audio
                  'arch_in_id' => 1,    // Guion Audio
                  'arch_out_id' => 2,   // Cortes Audio                    
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 3,
                  'name'=>'Revisar cortes de audio',
                  'cargo_id' => 2,      // jefe-dpa
                  'arch_in_id' => 1,    // Guion Audio
                  'arch_out_id' => 2,   // Cortes Audio                    
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),            
            array('id' => 4,
                  'name'=>'Asignar Disenador Grafico',
                  'cargo_id' => 3,      // jefe-dm
                  'arch_in_id' => 3,    // Guiones PPT  
                  'arch_out_id' => 3,   // Guiones PPT                 
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 5,
                  'name'=>'Realizar presentacion estatica',
                  'cargo_id' => 8,      // disenador-grafico
                  'arch_in_id' => 3,    // Guiones PPT
                  'arch_out_id' => 4,   // PPT Estatico                 
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 6,
                  'name'=>'Revisar presentacion estatica',
                  'cargo_id' => 3,      // jefe-dm
                  'arch_in_id' => 4,    // PPT Estatico  
                  'arch_out_id' => 4,   // PPT Estatico                 
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 7,
                  'name'=>'Revisar presentacion estatica final',
                  'cargo_id' => 5,      // edumatico
                  'arch_in_id' => 4,    // PPT Estatico  
                  'arch_out_id' => 4,   // PPT Estatico 
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 8,
                  'name'=>'Asignar Sincronizador',
                  'cargo_id' => 2,	    // jefe-dpa
                  'arch_in_id' => 5,    // Cortes Audio + PPT Estatico
                  'arch_out_id' => 5,   // Cortes Audio + PPT Estatico  
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 9,
                  'name'=>'Realizar animaciones de laminas',
                  'cargo_id' => 7,	    // sincronizador
                  'arch_in_id' => 5,    // Cortes Audio + PPT Estatico
                  'arch_out_id' => 6,   // PPT Animado                 
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 10,
                  'name'=>'Revisar presentacion animada',
                  'cargo_id' => 2,	    // jefe-dpa
                  'arch_in_id' => 6,    // PPT Animado
                  'arch_out_id' => 6,   // PPT Animado                 
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 11,
                  'name'=>'Generar HTML5',
                  'cargo_id' => 7,	    // sincronizador
                  'arch_in_id' => 6,    // PPT Animado  
                  'arch_out_id' => 7,   // HTML5                
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 12,
                  'name'=>'Revisar HTML5',
                  'cargo_id' => 2,	    // jefe-dpa
                  'arch_in_id' => 7,    // HTML5                
                  'arch_out_id' => 7,   // HTML5                                 
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),            
            array('id' => 13,
                  'name'=>'Revisar version final',
                  'cargo_id' => 5,	    // edumatico
                  'arch_in_id' => 7,    // HTML5                
                  'arch_out_id' => 7,   // HTML5                                 
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 )                        
        );
       	DB::table('tareas_produccion')->insert($tareas);
    }
}