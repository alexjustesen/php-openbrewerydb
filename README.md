# Open Brewery DB SDK (PHP)

PHP SDK for [Open Brewery DB](https://www.openbrewerydb.org/) api.

## Sponsor

Like this package? Consider [sponsoring](https://github.com/sponsors/alexjustesen) me to help me reach my goals.

## Install

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
$request = new GetBrewery('brewery-id-goes-here');

$response = $obdb->send($request);

$response->json();
```

#### List breweries

```php
$request = new ListBreweries();

$response = $obdb->send($request);
```

Additional methods for filtering results:

- `$request->filterByCity('hartford')` - `string`
- `$request->filterByName('broad brook')` - `string`
- `$request->filterByPostal('06002')` - `string`
- `$request->filterByState('connecticut')` - `string`
- `$request->filterByType('micro')` - `string`

Additional methods for sorting results:

- `$request->sortBy('type,name:asc')` - `string` or `array`
- `$request->sortByDistance(41.96200785, -72.66266463)` - $lat: `float`, $lon: `float`

#### Get a brewery

```php
$request = new GetBrewery('brewery-id-goes-here');

$response = $obdb->send($request);
```

#### Get random breweries

```php
// to-do
```

#### Search breweries

```php
// to-do
```
#### Autocomplete breweries

```php
// to-do
```

## Testing

### Using PHP CS Fixer

```
PHP_CS_FIXER_IGNORE_ENV=1 tools/php-cs-fixer/vendor/bin/php-cs-fixer fix src --allow-risky=yes
```

### Using Pest
```
./vendor/bin/pest
``
