<?php

namespace App\Src\ExternalServices\MercadoLibre;

use App\Src\Models\MeliToken;
use App\Src\ExternalServices\ConsumesExternalServices;

class MeliAuthenticationServices
{
    use ConsumesExternalServices;

    protected $baseUri;

    protected $clientId;

    protected $clientSecret;

    public function __construct()
    {
        $this->baseUri = config('services.meli.base_uri');
        $this->clientId = config('services.meli.client_id');
        $this->clientSecret = config('services.meli.client_secret');
    }
    
    /**
     * getClientCredentialsToken
     * No usar en MercadoLibre seguro no funcionará
     * @return void
     */
    public function getClientCredentialsToken()
    {
        if ($token = $this->existingValidToken()) {
            return $token;
        }

        $formParams = [
            'grant_type' => 'client_credentials',
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
        ];

        $tokenData = $this->makeRequest('POST', 'oauth/token', [], $formParams);

        $this->storeValidToken($tokenData, $formParams['grant_type']);

        return "{$tokenData->token_type} {$tokenData->access_token}";
    }

    public function storeValidToken($tokenData, $grantType)
    {
        // MeliToken model create register
    }

    public function existingValidToken()
    {
        //Comprobar que el token es válido
    }

    public function resolveAuthorizationUrl()
    {
        $query = http_build_query([
            'client_id' => $this->clientId,
            'redirect_uri' => 'redirecturi',
            'response_type' => 'code',
            'scope' => ''
        ]);

        return "{$this->baseUri}/oauth/authorize?{$query}";
    }

    public function getCodeToken($token)
    {
        $formParams = [
            'grant_type' => 'authorization_code',
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'redirect_uri' => 'redirecturi',
            'code' => ''//$code
        ];

        $tokenData = $this->makeRequest('POST', 'oauth/token', [], $formParams);

        $this->storeValidToken($tokenData, $formParams['grant_type']);

        return $tokenData->access_token;
    }
}
