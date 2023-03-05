## Open Brewery DB SDK (PHP)

PHP SDK for [Open Brewery DB](https://www.openbrewerydb.org/) api.

### To-do
- [x] Get a brewery
- [ ] Get a random brewery
- [ ] List breweries
    - [ ] pagination
        - [ ] `page`
        - [ ] `per_page`
    - [ ] filters
        - [ ] `by_city`
        - [ ] `by_dist`
        - [ ] `by_name`
        - [ ] `by_state`
        - [ ] `by_psotal`
        - [ ] `by_type`
    - [ ] sort
- [ ] Search
    - [ ] Search results
    - [ ] Autocomplete results

### Install

```
composer require alexjustesen/php-openbrewerydb
```

### Usage

#### Authentication

v1 of OpenBreweryDB API does not enforce any authentication patterns but rate limiting does exist.

#### Initialize the request

To get started create a new instance of the SDK.

```php
$obdb = new OpenBreweryDb;

```

#### Handling the response

The SDK makes use of [Saloon](https://docs.saloon.dev/) by Sam Carre, after a request is sent you can interact with the response with any of the [documented](https://docs.saloon.dev/the-basics/responses) methods like `->body()` or `->json()`.

In the example below we're requesting a single brewery and formatting the response as json.

```php
$request = new GetBrewery(string 'brewery-id-goes-here');

$response = $obdb->send($request);

$response->json();
```

#### Get a brewery

```php
$request = new GetBrewery(string 'brewery-id-goes-here');

$response = $obdb->send($request);
```
