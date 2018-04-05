PostNord [![Build Status](https://travis-ci.org/NordicWebTeam/postnord-php-sdk.svg?branch=master)](https://travis-ci.org/NordicWebTeam/postnord-php-sdk) [![Coverage Status](https://coveralls.io/repos/NordicWebTeam/postnord-php-sdk/badge.svg)](https://coveralls.io/r/NordicWebTeam/postnord-php-sdk)
==

```php5
<?php
use PostNord\Request;
use PostNord\Client;

$request = new Request($apiKey);
$client = new Client($request);

$result = $client->findNearestByZipCode(7100);
```
