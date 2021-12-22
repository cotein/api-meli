<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Src\Models\Iva;
use Faker\Generator as Faker;

$factory->define(Iva::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement([10.5, 21])
    ];
});
