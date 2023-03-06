<?php

declare(strict_types=1);

namespace OpenBreweryDb;

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
