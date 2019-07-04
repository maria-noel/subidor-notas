<?php

use Illuminate\Database\Seeder;
use Bezhanov\Faker\Provider\Commerce;

class CarrerasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new Commerce($faker));

        for ($i = 0; $i <= 10; $i++) :
            DB::table('carreras')
                ->insert([
                    'nombre' => $faker->productName,
                ]);

        endfor;
    }
}
