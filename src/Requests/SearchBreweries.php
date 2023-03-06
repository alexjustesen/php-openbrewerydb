<?php

declare(strict_types=1);

namespace OpenBreweryDb\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class SearchBreweries extends Request
{
    /**
     * HTTP Method
     *
     * @var Method
     */
    protected Method $method = Method::GET;

    public function __construct(
        protected string $queryString,
        protected int $page = 1,
        protected int $perPage = 50
    ) {
    }

    /**
     * Resolve the endpoint
     *
     * @return string
     */
    public function resolveEndpoint(): string
    {
        return '/breweries/search';
    }

    /**
     * Set default query params
     */
    protected function defaultQuery(): array
    {
        return [
            'page' => $this->page,
            'per_page' => $this->perPage,
            'query' => urlencode($this->queryString),
        ];
    }
}
