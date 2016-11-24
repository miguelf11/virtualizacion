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
        $users = array(
          array('id' => 100,
                'name'=>'Pedro Perez',                  
                'email' => 'pedroperez@gmail.com',
                'password' => bcrypt('1234'),
                'cargo_id' => 7,    // Sincronizador
                'created_at' => date('Y-m-d G:i:s'), 
                'updated_at' => date('Y-m-d G:i:s')    
          ),
          array('id' => 200,
                'name'=>'Maria Pardo',                  
                'email' => 'mariapardo@gmail.com',
                'password' => bcrypt('1234'),
                'cargo_id' => 2,    // Jefe DPA
                'created_at' => date('Y-m-d G:i:s'), 
                'updated_at' => date('Y-m-d G:i:s')    
          ),
          array('id' => 300,
                'name'=>'Monica Alvares',                  
                'email' => 'monicaalvares@gmail.com',
                'password' => bcrypt('1234'),
                'cargo_id' => 3,    // Jefe DM
                'created_at' => date('Y-m-d G:i:s'), 
                'updated_at' => date('Y-m-d G:i:s')    
          ),
          array('id' => 400,
                'name'=>'Juan Cuesta',                  
                'email' => 'juancuesta@gmail.com',
                'password' => bcrypt('1234'),
                'cargo_id' => 4,    // Profesor
                'created_at' => date('Y-m-d G:i:s'), 
                'updated_at' => date('Y-m-d G:i:s')    
          ),
          array('id' => 500,
                'name'=>'Antonio Alvarado',                  
                'email' => 'antonioalvarado@gmail.com',
                'password' => bcrypt('1234'),
                'cargo_id' => 5,    // Edumático
                'created_at' => date('Y-m-d G:i:s'), 
                'updated_at' => date('Y-m-d G:i:s')    
          ),                                                  
          array('id' => 600,
                'name'=>'Enrique Segoviano',                  
                'email' => 'enriquesegoviano@gmail.com',
                'password' => bcrypt('1234'),
                'cargo_id' => 1,    // Director
                'created_at' => date('Y-m-d G:i:s'), 
                'updated_at' => date('Y-m-d G:i:s')    
          ),
          array('id' => 700,
                'name'=>'Erika Paez',                  
                'email' => 'erikapaez@gmail.com',
                'password' => bcrypt('1234'),
                'cargo_id' => 7,    // Sincronizador
                'created_at' => date('Y-m-d G:i:s'), 
                'updated_at' => date('Y-m-d G:i:s')    
          ),
          array('id' => 800,
                'name'=>'Jesus Urbina',                  
                'email' => 'jesusurbina@gmail.com',
                'password' => bcrypt('1234'),
                'cargo_id' => 7,    // Sincronizador
                'created_at' => date('Y-m-d G:i:s'), 
                'updated_at' => date('Y-m-d G:i:s')    
          ),                    
          array('id' => 900,
                'name'=>'Albert Alviares',                  
                'email' => 'albertalviares@gmail.com',
                'password' => bcrypt('1234'),
                'cargo_id' => 6,    // Tecnico-Audio
                'created_at' => date('Y-m-d G:i:s'), 
                'updated_at' => date('Y-m-d G:i:s')    
          ),
          array('id' => 1000,
                'name'=>'Maylen Valero',                  
                'email' => 'maylenvalero@gmail.com',
                'password' => bcrypt('1234'),
                'cargo_id' => 6,    // Tecnico-Audio
                'created_at' => date('Y-m-d G:i:s'), 
                'updated_at' => date('Y-m-d G:i:s')    
          ),
          array('id' => 1100,
                'name'=>'Laura Rivas',                  
                'email' => 'laurarivas@gmail.com',
                'password' => bcrypt('1234'),
                'cargo_id' => 6,    // Tecnico-Audio
                'created_at' => date('Y-m-d G:i:s'), 
                'updated_at' => date('Y-m-d G:i:s')    
          ),          
          array('id' => 1200,
                'name'=>'Hever Alfonso',                  
                'email' => 'heveralfonso@gmail.com',
                'password' => bcrypt('1234'),
                'cargo_id' => 8,    // Disenador-Grafico
                'created_at' => date('Y-m-d G:i:s'), 
                'updated_at' => date('Y-m-d G:i:s')    
          ),
          array('id' => 1300,
                'name'=>'Luis Vidal',                  
                'email' => 'luisvidal@gmail.com',
                'password' => bcrypt('1234'),
                'cargo_id' => 8,    // Disenador-Grafico
                'created_at' => date('Y-m-d G:i:s'), 
                'updated_at' => date('Y-m-d G:i:s')    
          ),
          array('id' => 1400,
                'name'=>'Jorge Caraballo',                  
                'email' => 'jorgecaraballo@gmail.com',
                'password' => bcrypt('1234'),
                'cargo_id' => 8,    // Disenador-Grafico
                'created_at' => date('Y-m-d G:i:s'), 
                'updated_at' => date('Y-m-d G:i:s')    
          ),
          array('id' => 1500,
                'name'=>'Admin',                  
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
                'cargo_id' => 9,    // Admin
                'created_at' => date('Y-m-d G:i:s'), 
                'updated_at' => date('Y-m-d G:i:s')    
          ),                    
        );
        DB::table('users')->insert($users);
    }
}