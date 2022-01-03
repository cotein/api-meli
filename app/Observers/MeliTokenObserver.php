<?php

namespace App\Observers;

use App\Src\Models\MeliToken;

class MeliTokenObserver
{
    public function creating(MeliToken $meliToken)
    {
        $meliToken->company_id = 1;;
    }
}
