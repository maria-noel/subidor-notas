<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Facultad;
use Faker\Generator as Faker;

$factory->define(Facultad::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
    ];
});
