<?php

use Illuminate\Database\Seeder;

class ArchivosProduccionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$archivos = array(
            array('id' => 1,
                  'name'=>'Guiones Audio',                                    
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 2,
                  'name'=>'Cortes Audio',                                    
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
			      array('id' => 3,
                  'name'=>'Guiones PPT',                                    
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 4,
                  'name'=>'PPT Estatico',                                    
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 5,
                  'name'=>'Cortes Audio + PPT Estatico',                                    
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),            
            array('id' => 6,
                  'name'=>'PPT Animado',                                    
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 7,
                  'name'=>'HTML5',                                    
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 )                               
        );
        DB::table('archivos_produccion')->insert($archivos);
    }
}
