<?php

use Illuminate\Database\Seeder;

class CursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cursos = array(
            'id' => 1,
            'name'=>'Gestion de Riesgos',
            //'carrera_id' => 1,	// Administracion de Empresas            
            'created_at' => date('Y-m-d G:i:s'), 
            'updated_at' => date('Y-m-d G:i:s')
        );
        DB::table('cursos')->insert($cursos);
    }
}
            