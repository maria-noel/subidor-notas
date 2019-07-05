<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MateriasTableSeeder::class);
        $this->call(CatedrasTableSeeder::class);
        $this->call(AlumnosTableSeeder::class);
        $this->call(FacultadesTableSeeder::class);
        $this->call(CarrerasTableSeeder::class);
        $this->call(ComisionesTableSeeder::class);
        $this->call(NotasTableSeeder::class);
    }
}
