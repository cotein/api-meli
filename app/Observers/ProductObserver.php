<?php

namespace App\Observers;

use App\Src\Models\Product;

class ProductObserver
{
    public function creating(Product $product)
    {
        $product->company_id = 1;
    }
}
