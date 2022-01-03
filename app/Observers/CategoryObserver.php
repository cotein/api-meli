<?php

namespace App\Observers;

use App\Src\Models\Category;

class CategoryObserver
{
    public function creating(Category $category)
    {
        $category->company_id = 1;;
    }
}
