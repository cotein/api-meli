<?php

namespace App\Src\Models;

use App\Src\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
