<?php

namespace App\Src\ExternalServices\MercadoLibre;

use Exception;
use App\Src\ExternalServices\AuthorizesExternalTrait;
use App\Src\ExternalServices\ConsumesExternalServices;
use App\Src\ExternalServices\InteracWithExternalResponsesTrait;

class MeliServices
{
    use ConsumesExternalServices, InteracWithExternalResponsesTrait, AuthorizesExternalTrait;

    protected $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.meli.base_uri');
    }
    
    
}
