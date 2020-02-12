<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Coche;
use Faker\Generator as Faker;

$factory->define(Coche::class, function (Faker $faker) {
    return [
        'make' =>$faker->name,
        'model' =>$faker->paragraph,
        'produced_on' =>$faker->date,
    ];
});
