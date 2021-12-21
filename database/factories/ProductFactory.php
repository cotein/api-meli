<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Src\Models\Product;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    $price = $faker->numberBetween(1500, 50000);
    $name = $faker->sentence(4);
    $slug = Str::slug($name, '_');

    return [
        'meli_id' => null,
        'supplier_id' => null,
        'brand_id' => null,
        'attr_item_condition' => null,
        'buying_mode' =>  null,
        'main_category' =>  null,
        'path_from_root' =>  null,
        'children_category' =>  null,
        'name' => $name,
        'name_on_supplier' => null,
        'code' => $faker->creditCardNumber(),
        'code_on_supplier' => $faker->creditCardNumber(),
        'sub_title' => $faker->sentence(6),
        'description' => $faker->paragraph(),
        'original_price' => $price,
        'sale_price' => $price,
        'seller_custom_field' => null,
        'meta_keywords' => null,
        'iva_id' => $faker->randomElement([5, 6]),
        'listing_type' => null,
        'money' => 'PES',
        'status_id' => 1,
        'priority_id' => $faker->randomElement([1,2,3,4,5,6]),
        'attributes' => null,
        'published_meli' => null,
        'published_here' => false,
        'hot_offert' => null,
        'active' => true,
        'discount_percentage' => 0,
        'slug' => $slug,
        'categories_path' => null,
        'selected_categories_from_root' => null,
        'meli_info' => null,
        'search_by' => null,
        'product_type_id' => null,
        'product_model_id' => null,
        'category_id' => 1,
        'stock' => $faker->randomElement([1,2,3,4,5,6, 100, 500, 1000]),
        'critical_stock' => 10
    ];
});
