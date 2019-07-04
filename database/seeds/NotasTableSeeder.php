<?php

use Illuminate\Database\Seeder;
use App\Alumno;
use App\Comision;

class NotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        
        for ($i=0; $i<10; $i++) :
            DB::table('alumno_comision')
            ->insert([
                'nota' => $faker->numberBetween(1,10),
                'condicion' => $faker->boolean(),
                'alumno_id' => $this->getRandomAlumnoId(),
                'comision_id' => $this->getRandomComisionId(),
            ]);

        endfor;
    }

    private function getRandomAlumnoId() 
    {
        $obj = Alumno::inRandomOrder()->first();
        return $obj->id;
    }

    private function getRandomComisionId() 
    {
        $obj = Comision::inRandomOrder()->first();
        return $obj->id;
    }
}
