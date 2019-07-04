<?php

use Illuminate\Database\Seeder;
use Bezhanov\Faker\Provider\Educator;

class MateriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new Educator($faker));

        for ($i = 0; $i <= 10; $i++) :
            DB::table('materias')
                ->insert([
                    'nombre' => $faker->campus,
                ]);

        endfor;
    }
}
