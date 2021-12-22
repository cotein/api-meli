<?php

namespace App\Http\Controllers\Api;

use App\Src\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return response()->json($products, 200);
    }

    public function show()
    {
        $product = Product::find(request()->product_id);

        return response()->json($product, 200);
    }
}
