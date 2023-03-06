<?php

declare(strict_types=1);

namespace OpenBreweryDb\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetBrewery extends Request
{
    /**
     * HTTP Method
     *
     * @var Method
     */
    protected Method $method = Method::GET;

    /**
     * Resolve the endpoint
     *
     * @return string
     */
    public function resolveEndpoint(): string
    {
        return '/breweries/'.$this->obdb_id;
    }

    public function __construct(
        protected string $obdb_id
    ) {
    }
}
