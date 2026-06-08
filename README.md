Fuzz HTTP Exception
===================

A library containing a set of RESTful HTTP exceptions that use a consistent interface, built upon the ideas set by [symfony/http-kernel](https://github.com/symfony/http-kernel)

This code precedes the formation of inter-op standards, and is best suited for similar legacy code. You can use
these classes to handle data you want to send back with semantically correct error messaging, but it's probably not
the best solution for new projects.

This library _can_ be used as error handling middleware, but it's _not recommended_. Most contemporary PHP
frameworks implement the PSR-7 and PSR-15 standards for HTTP Messages and supporting middleware. As such, you'll be
required to do some data juggling from Request/Response streams into "solid" data passed through the Exceptions.

Don't expect a lot of radical movement here - it's already an outdated design for handling HTTP errors, but it's small
enough for me to learn about maintaining open libraries.

## Usage
```php
<?php

use Fuzz\HttpException\AccessDeniedHttpException;

throw new AccessDeniedHttpException('Access denied.');
```

## Testing
`phpunit`

## Code Coverage
`phpunit --coverage-html tests/coverage && open tests/coverage/index.html`

### Credit & Thanks

Thank you to [Fuzz Productions](https://github.com/fuzz-productions/php-http-exception) for the solution that worked
best in my situation, and in particular to [Philip Cohn-Cort](https://github.com/Cliabhach) for helping transition this
library to my care taking.
