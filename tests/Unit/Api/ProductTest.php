<?php

namespace Tests\Unit\Api;

use Tests\TestCase;
use App\Src\Models\Product;
use Illuminate\Http\Response;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_products_index_method()
    {
        $this->json('get', 'api/products')
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonFragment([
                'name' => 'Quae vel eligendi.'
            ]);

    }

    public function test_get_product_by_id()
    {
        $payload = [
            'product_id' => 1,
        ];

        $this->json('get', 'api/products/', $payload)
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonFragment([
                'name' => 'Quae vel eligendi.',
                'code' => '378180448789655'
            ]);
    }

   
}
