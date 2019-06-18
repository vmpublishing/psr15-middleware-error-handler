<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Exceptions\Http;

use VM\ErrorHandler\Exceptions\HttpException;
use Fig\Http\Message\StatusCodeInterface;

class PayloadTooLarge extends HttpException
{
    public function getHttpStatusCode(): int
    {
        return self::STATUS_PAYLOAD_TOO_LARGE;
    }
}
