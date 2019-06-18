<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Exceptions\Http;

use VM\ErrorHandler\Exceptions\HttpException;

class LoopDetected extends HttpException
{
    public function getHttpStatusCode(): int
    {
        return self::STATUS_LOOP_DETECTED;
    }
}
