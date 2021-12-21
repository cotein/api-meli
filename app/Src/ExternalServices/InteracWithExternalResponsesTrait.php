<?php

namespace App\Src\ExternalServices;

trait InteracWithExternalResponsesTrait
{
    /**
     * decodeResponse
     *
     * @param  mixed $response
     * @return void
     */
    public function decodeResponse($response)
    {
        $decodedResponse = json_decode($response);

        return $decodedResponse->data ?? $decodedResponse;
    }
        
    /**
     * checkIfErrorResponse
     *
     * @param  mixed $response
     * @return void
     */
    public function checkIfErrorResponse($response)
    {
        if (isset($response->error)) {
            throw new \Exception("Algo se rompió {$response->error}");
        }
    }
}
