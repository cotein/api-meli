<?php

namespace App\Observers;

use App\Src\Models\AfipToken;

class AfipTokenObserver
{
    public function creating(AfipToken $afipToken)
    {
        $afipToken->company_id = 1;
    }
}
