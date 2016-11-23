<?php

use Illuminate\Database\Seeder;

class LeccionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lecciones = array(
        	array(
            	'id' => 100,
            	'name'=>'Introduccion a la gestion de riesgos',            
            	'curso_id' => 100,	    //  Gestion de Riesgos
            	'status' => 'Activa',
            	'audio' => false,
                't_actual_id' => 9,		// Realizar animaciones de láminas    
            	'created_at' => date('Y-m-d G:i:s'), 
            	'updated_at' => date('Y-m-d G:i:s')
        	),
			array(
            	'id' => 200,
            	'name'=>'Evaluacion de riesgos',            
            	'curso_id' => 100,	    //  Gestion de Riesgos
            	'status' => 'Activa',
            	'audio' => false,		    
                't_actual_id' => 9,     // Realizar animaciones de láminas
            	'created_at' => date('Y-m-d G:i:s'), 
            	'updated_at' => date('Y-m-d G:i:s')
        	),
        	array(
            	'id' => 300,
            	'name'=>'Riesgos de cambio',            
            	'curso_id' => 100,	    //  Gestion de Riesgos
            	'status' => 'Activa',
            	'audio' => false,		
                't_actual_id' => 11,    // Generar HTML5  
            	'created_at' => date('Y-m-d G:i:s'), 
            	'updated_at' => date('Y-m-d G:i:s')
        	),
			array(
            	'id' => 400,
            	'name'=>'Riesgos operativos',            
            	'curso_id' => 100,	    //  Gestion de Riesgos
            	'status' => 'Activa',
            	'audio' => false,		    
                't_actual_id' => 9,     // Realizar animaciones de láminas                 
            	'created_at' => date('Y-m-d G:i:s'), 
            	'updated_at' => date('Y-m-d G:i:s')
        	),
        	array(
            	'id' => 500,
            	'name'=>'Riesgos de mercado',            
            	'curso_id' => 100,	    //  Gestion de Riesgos
            	'status' => 'Activa',
            	'audio' => false,		    
                't_actual_id' => 9,     // Realizar animaciones de láminas                
            	'created_at' => date('Y-m-d G:i:s'), 
            	'updated_at' => date('Y-m-d G:i:s')
        	)        	        	        	        	        	
        );	
        DB::table('lecciones')->insert($lecciones);
    }
}
