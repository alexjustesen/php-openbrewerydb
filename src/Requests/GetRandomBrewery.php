<?php

declare(strict_types=1);

namespace OpenBreweryDb\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetRandomBrewery extends Request
{
    /**
     * HTTP Method
     *
     * @var Method
     */
    protected Method $method = Method::GET;

    public function __construct(
        protected int $size = 1
    ) {
    }

    /**
     * Resolve the endpoint
     *
     * @return string
     */
    public function resolveEndpoint(): string
    {
        return '/breweries/random';
    }

    /**
     * Set default query params
     */
    protected function defaultQuery(): array
    {
        return [
            'size' => $this->size,
        ];
    }
}
