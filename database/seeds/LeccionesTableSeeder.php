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
            	'id' => 1,
            	'name'=>'Introduccion a la gestion de riesgos',            
            	'curso_id' => 1,	//  Gestion de Riesgos
            	'status' => 'Activa',
            	'audio' => false,		    
            	'created_at' => date('Y-m-d G:i:s'), 
            	'updated_at' => date('Y-m-d G:i:s')
        	),
			array(
            	'id' => 2,
            	'name'=>'Evaluacion de riesgos',            
            	'curso_id' => 1,	//  Gestion de Riesgos
            	'status' => 'Activa',
            	'audio' => false,		    
            	'created_at' => date('Y-m-d G:i:s'), 
            	'updated_at' => date('Y-m-d G:i:s')
        	),
        	array(
            	'id' => 3,
            	'name'=>'Riesgos de cambio',            
            	'curso_id' => 1,	//  Gestion de Riesgos
            	'status' => 'Activa',
            	'audio' => false,		    
            	'created_at' => date('Y-m-d G:i:s'), 
            	'updated_at' => date('Y-m-d G:i:s')
        	),
			array(
            	'id' => 4,
            	'name'=>'Riesgos operativos',            
            	'curso_id' => 1,	//  Gestion de Riesgos
            	'status' => 'Activa',
            	'audio' => false,		    
            	'created_at' => date('Y-m-d G:i:s'), 
            	'updated_at' => date('Y-m-d G:i:s')
        	),
        	array(
            	'id' => 5,
            	'name'=>'Riesgos de mercado',            
            	'curso_id' => 1,	//  Gestion de Riesgos
            	'status' => 'Activa',
            	'audio' => false,		    
            	'created_at' => date('Y-m-d G:i:s'), 
            	'updated_at' => date('Y-m-d G:i:s')
        	)        	        	        	        	        	
        );	
        DB::table('lecciones')->insert($lecciones);
    }
}
