<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Src\Models\Company;
use Faker\Generator as Faker;


$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company(),
        'number' => $faker->numberBetween(11111111111, 99999999999),
        'inscription_id' => $faker->randomDigit(1,6),             
        'purchaser_document_id' => 25,  
        'datos_generales' => null,
        'regimen_general' =>null,
        'monotributo' =>null,
        'afip_data' =>null,
        'percep_iibb' => $faker->boolean(50),
        'percep_iva' => $faker->boolean(50),
        'ret_suss' => $faker->boolean(50),
        'ret_iva' => $faker->boolean(50),
        'ret_iibb' => $faker->boolean(50),
        'ret_gcias' => $faker->boolean(50),
        'activity_init' => $faker->date('Y-m-d', 'now'),
        'iibb_conv' => $faker->numberBetween(5555555, 7777777),
        'settings' => json_encode([            
            [
                "afip_environment" => false,
            ]
         ]),
        'pto_vta_fe' => $faker->randomDigit(1,6),
        'pto_vta_fe_exterior' => $faker->randomDigit(1,6),
        'pto_vta_fce' => $faker->randomDigit(1,6),
        'pto_vta_fce_exterior' => $faker->randomDigit(1,6),
        'pto_vta_remito' => $faker->randomDigit(1,6),
        'pto_vta_remito_exterior' => $faker->randomDigit(1,6),
        'pto_vta_recibo' => $faker->randomDigit(1,6),
    ];
});
