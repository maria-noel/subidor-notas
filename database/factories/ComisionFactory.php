<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Comision;

$factory->define(Comision::class, function (Faker $faker) {
    $turno = $faker->randomElement(['M', 'T', 'N']);
    return [
        'turno' => $turno,
        'semestre' => $faker->boolean(),
        'anio' => $faker->numberBetween(1,6),

        'facultad_id' => function () {
            return factory(App\Facultad::class)->create()->id;
        },
        'carrera_id' => function () {
            return factory(App\Carrera::class)->create()->id;
        },
        'materia_id' => function () {
            return factory(App\Materia::class)->create()->id;
        },
        'catedra_id' => function () {
            return factory(App\Catedra::class)->create()->id;
        }

    ];
});