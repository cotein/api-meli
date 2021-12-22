<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Src\Models\Status;
use Faker\Generator as Faker;

$factory->define(Status::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement(['ACTIVO', 'PAUSADO'])
    ];
});
