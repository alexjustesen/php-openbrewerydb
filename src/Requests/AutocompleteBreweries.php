<?php

declare(strict_types=1);

namespace OpenBreweryDb\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class AutocompleteBreweries extends Request
{
    /**
     * HTTP Method
     *
     * @var Method
     */
    protected Method $method = Method::GET;

    public function __construct(
        protected string $queryString
    ) {
    }

    /**
     * Resolve the endpoint
     *
     * @return string
     */
    public function resolveEndpoint(): string
    {
        return '/breweries/autocomplete';
    }

    /**
     * Set default query params
     */
    protected function defaultQuery(): array
    {
        return [
            'query' => urlencode($this->queryString),
        ];
    }
}
