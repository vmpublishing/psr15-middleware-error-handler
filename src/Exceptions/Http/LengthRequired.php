<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Exceptions\Http;

use VM\ErrorHandler\Exceptions\HttpException;

class LengthRequired extends HttpException
{
    public function getHttpStatusCode(): int
    {
        return self::STATUS_LENGTH_REQUIRED;
    }
}
