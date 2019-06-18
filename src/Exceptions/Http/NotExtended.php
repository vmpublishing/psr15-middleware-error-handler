<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Exceptions\Http;

use VM\ErrorHandler\Exceptions\HttpException;

class NotExtended extends HttpException
{
    public function getHttpStatusCode(): int
    {
        return self::STATUS_NOT_EXTENDED;
    }
}
