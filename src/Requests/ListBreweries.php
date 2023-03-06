<?php

namespace OpenBreweryDb\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListBreweries extends Request
{
    /**
     * HTTP Method
     *
     * @var Method
     */
    protected Method $method = Method::GET;

    public function __construct(
        protected int $perPage = 50,
        protected int $page = 1,
    ) {}

    /**
     * Resolve the endpoint
     */
    public function resolveEndpoint(): string
    {
        return '/breweries';
    }

    /**
     * Set default query params
     */
    protected function defaultQuery(): array
    {
        return [
            'per_page' => $this->perPage,
            'page' => $this->page,
        ];
    }

    /**
     * Filter breweries by city.
     */
    public function filterByCity(string $city)
    {
        $this->query()->add('by_city', urlencode($city));
    }

    /**
     * Filter breweries by name.
     */
    public function filterByName(string $name)
    {
        $this->query()->add('by_name', urlencode($name));
    }

    /**
     * Filter breweries by (United States) postal code.
     */
    public function filterByPostal(string $postal)
    {
        $this->query()->add('by_postal', $postal);
    }

    /**
     * Filter breweries by (United States) state.
     */
    public function filterByState(string $state)
    {
        $this->query()->add('by_state', urlencode($state));
    }

    /**
     * Filter by type of brewery.
     */
    public function filterByType(string $type)
    {
        $this->query()->add('by_type', $type);
    }

    /**
     * Sort the results by one or more fields.
     */
    public function sortBy(string|array $params)
    {
        $sortString = $params;

        if (is_array($params)) {
            $sortString = implode(',', $params);
        }

        $this->query()->add('sort', $sortString);
    }

    /**
     * Sort the results by distance from an origin point.
     */
    public function sortByDistance(float $lat, float $lon)
    {
        $this->query()->add('by_dist', "{$lat},{$lon}");
    }
}
