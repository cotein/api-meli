<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Src\Models\Supplier;
use Faker\Generator as Faker;

$factory->define(Supplier::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3)
    ];
});
