<?php

namespace App\Src\Models;

use App\Src\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
