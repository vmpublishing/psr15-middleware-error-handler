<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Exceptions\Http;

use VM\ErrorHandler\Exceptions\HttpException;

class NetworkAuthenticationRequired extends HttpException
{
    public function getHttpStatusCode(): int
    {
        return self::STATUS_NETWORK_AUTHENTICATION_REQUIRED;
    }
}
