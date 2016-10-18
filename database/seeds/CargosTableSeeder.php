<?php

use Illuminate\Database\Seeder;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cargos = array(
            array('id' => 1,
                  'name'=>'director-dsm',
                  'rol' => 'director',
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 2,
                  'name'=>'jefe-dpa',
                  'rol' => 'manager', 
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 3,
                  'name'=>'jefe-dm',
                  'rol' => 'manager',
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 4,
                  'name'=>'profesor',
                  'rol' => 'worker',
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),                 
            array('id' => 5,
                  'name'=>'edumatico',
                  'rol' => 'worker',
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),                
            array('id' => 6,
                  'name'=>'tecnico-audio',
                  'rol' => 'worker',
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),                
            array('id' => 7, 
                  'name'=>'sincronizador',
                  'rol' => 'worker',
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),                
            array('id' => 8,
                  'name'=>'disenador-grafico',
                  'rol' => 'worker',
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 )             
        );        
        DB::table('cargos')->insert($cargos); 
    }
}