<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Comision;
use App\Alumno;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'nota' => $faker->numberBetween(1,10),
        'condicion' => $faker->boolean(),
        'alumno_id' => function() {
            return factory(Alumno::class)->create()->id;
        },
        'comision_id' => function() {
            return factory(Comision::class)->create()->id;
        }
    ];
});
