<?php

namespace App\Observers;

use App\Src\Models\Supplier;

class SupplierObserver
{
    public function FunctionName(Supplier $supplier)
    {
        $supplier->company_id = 1;
    }
}
