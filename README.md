[![Build Status](https://scrutinizer-ci.com/g/vmpublishing/psr15-middleware-error-handler/badges/build.png?b=master)](https://scrutinizer-ci.com/g/vmpublishing/psr15-middleware-error-handler/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/vmpublishing/psr15-middleware-error-handler/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/vmpublishing/psr15-middleware-error-handler/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/vmpublishing/psr15-middleware-error-handler/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/vmpublishing/psr15-middleware-error-handler/?branch=master)

**WHAT**

PSR-15 error handling middleware with as low dependencies as possible.

for productive use we like a middleware that captures and processes error into a nicer format (if possible)

this comes with two handler implementations.
one just rethrow the error (for development purposes)
one responds with the contents of a predefined file and a correct status code (for production use)

**INSTALL**

To install simply use
`composer require vmpublishing/psr15-middleware-error-handler:*@stable`

**USE**

This is quite simple: define your handler and add the middleware;

```
use VM\ErrorHandler\Services\RethrowHandler;

$handler = new RethrowHandler();
$middleware = new ErrorProcessor($handler);

// and for slim, given $app
$app->add($middleware);

// or just add it on the routes you want it on
```

For the StaticFileHandler you need to pass in at least one file and an empty Response object;

```
use VM\ErrorHandler\Services\StaticFileHandler;

$handler = new StaticFileHandler('/path/to/500.html', $emptyResponse);
$middleware = new ErrorProcessor($handler);

// and for slim, given $app
$app->add($middleware);
// ...
```

To have specific ErrorCodes, you need to use the Http Exceptions from this library, ie: NotFound
