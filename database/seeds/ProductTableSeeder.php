<?php

use App\Src\Models\Category;
use App\Src\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = factory(Product::class, 500)->create();

        $categories = Category::all();

        $products->map(function($product) use($categories){
            $product->categories()->attach($categories->random()->id);
        });
    }
}
