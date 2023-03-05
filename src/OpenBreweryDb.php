<?php

namespace OpenBreweryDb;

use OpenBreweryDb\Responses\OpenBreweryDbResponse;
use Saloon\Http\Connector;

class OpenBreweryDb extends Connector
{
    /**
     * Resolve the base URL of the service.
     *
     * @return string
     */
    public function resolveBaseUrl(): string
    {
        return 'https://api.openbrewerydb.org';
    }

    /**
     * Define default headers
     *
     * @return string[]
     */
    protected function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];
    }
}
