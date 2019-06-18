<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Exceptions;

use Psr\Http\Client\ClientExceptionInterface;
use Fig\Http\Message\StatusCodeInterface;
use RuntimeException;

class HttpException extends RuntimeException implements StatusCodeInterface
{
    public function getHttpStatusCode(): int
    {
        return self::STATUS_INTERNAL_SERVER_ERROR;
    }
}
