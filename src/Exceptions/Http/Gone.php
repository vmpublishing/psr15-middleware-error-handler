<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Exceptions\Http;

use VM\ErrorHandler\Exceptions\HttpException;
use Fig\Http\Message\StatusCodeInterface;

class Gone extends HttpException
{
    public function getHttpStatusCode(): int
    {
        return self::STATUS_GONE;
    }
}