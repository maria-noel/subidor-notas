<?php

use Illuminate\Database\Seeder;

class ComisionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $turno = $faker->randomElement(['M', 'T', 'N']);
        $semestre = $faker->randomElement([1,2]);

        for ($i = 0; $i <= 10; $i++) :
            DB::table('comisiones')
                ->insert([
                    'turno' => $turno,
                    'anio' => $faker->numberBetween(1, 6),
                    'semestre' => $semestre,
                    'carrera_id' => $this->getRandomCarreraId(),
                    'facultad_id' => $this->getRandomFacultadId(),
                    'catedra_id' => $this->getRandomCatedraId(),
                    'materia_id' => $this->getRandomMateriaId(),
                ]);
        endfor;
    }

    private function getRandomCarreraId()
    {
        $obj = \App\Carrera::inRandomOrder()->first();
        
        return $obj->id;
    }
    private function getRandomFacultadId()
    {
        $obj = \App\Facultad::inRandomOrder()->first();
        return $obj->id;
    }
    private function getRandomCatedraId()
    {
        $obj = \App\Catedra::inRandomOrder()->first();
        return $obj->id;
    }
    private function getRandomMateriaId()
    {
        $obj = \App\Materia::inRandomOrder()->first();
        return $obj->id;
    }
}
