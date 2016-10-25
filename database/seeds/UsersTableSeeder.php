<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $user = array('id' => 1,
                  'name'=>'Pedro Perez',                  
                  'email' => 'pedroperez@gmail.com',
                  'password' => '1234',
                  'cargo_id' => 7,    // Sincronizador
                  'created_at' => date('Y-m-d G:i:s'), 
                  'updated_at' => date('Y-m-d G:i:s')    
                 );

        DB::table('users')->insert($user);
    }
}