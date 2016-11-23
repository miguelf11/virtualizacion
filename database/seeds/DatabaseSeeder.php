<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Permanent Data
        $this->call(CargosTableSeeder::class);
        $this->call(ArchivosProduccionTableSeeder::class);
        $this->call(TareasProduccionTableSeeder::class);        

        // Testing Data
        $this->call(CarrerasTableSeeder::class);
        $this->call(CursosTableSeeder::class);
        $this->call(LeccionesTableSeeder::class);
        $this->call(UsersTableSeeder::class);        
        $this->call(LeccionUserTableSeeder::class);
        $this->call(TareasTableSeeder::class);        
        $this->call(IntentosTableSeeder::class);        
        $this->call(AlertasTableSeeder::class);        
        $this->call(ObservacionesTableSeeder::class);        

        Model::reguard();
    }
}