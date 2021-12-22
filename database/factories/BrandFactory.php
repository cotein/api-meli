<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Src\Models\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2)
    ];
});
