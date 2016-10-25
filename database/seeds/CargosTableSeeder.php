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
                  'name'=>'Director DSM',
                  'rol' => 'Director',
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 2,
                  'name'=>'Jefe DPA',
                  'rol' => 'Manager', 
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 3,
                  'name'=>'Jefe DM',
                  'rol' => 'Manager',
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),
            array('id' => 4,
                  'name'=>'Profesor',
                  'rol' => 'Worker',
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),                 
            array('id' => 5,
                  'name'=>'Edumatico',
                  'rol' => 'Worker',
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),                
            array('id' => 6,
                  'name'=>'Tecnico de Audio',
                  'rol' => 'Worker',
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),                
            array('id' => 7, 
                  'name'=>'Sincronizador',
                  'rol' => 'Worker',
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 ),                
            array('id' => 8,
                  'name'=>'Disenador Grafico',
                  'rol' => 'Worker',
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')
                 )             
        );        
        DB::table('cargos')->insert($cargos); 
    }
}