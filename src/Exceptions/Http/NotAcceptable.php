<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Exceptions\Http;

use VM\ErrorHandler\Exceptions\HttpException;

class NotAcceptable extends HttpException
{
    public function getHttpStatusCode(): int
    {
        return self::STATUS_NOT_ACCEPTABLE;
    }
}
