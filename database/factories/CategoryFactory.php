<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;
use App\Src\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {

    $name = $faker->sentence();
    $slug = Str::slug($name, '_');

    return [
        'code' => $faker->creditCardNumber(),
        'parent_id' => 0,
        'name' => $name,
        'slug' => $slug,
        'attributes' => rand(0,1) 
            ? json_encode([            
                    [
                        " $faker->word  " => "  $faker->word  ",
                    ]
                ])
            : null,
        'active' => rand(0,1)
    ];
});
