<?php

namespace App\Observers;

use App\Src\Models\Brand;

class BrandObserver
{
    public function creating(Brand $brand)
    {
        $brand->company_id = 1;
    }
}
