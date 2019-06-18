<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Services;

use PHPUnit\Framework\TestCase;
use TypeError;
use VM\ErrorHandler\Exceptions\Http\Forbidden;
use VM\ErrorHandler\Exceptions\HttpException;
use VM\ErrorHandler\Services\RethrowHandler;

class RethrowHandlerTest extends TestCase
{
    public function testHandleShallThrow(): void
    {
        $this->expectException(TypeError::class);
        $handler = new RethrowHandler();
        $exception = new TypeError();
        $handler->handle($exception);
    }

    public function testHandleHttpExceptionShallThrow(): void
    {
        $this->expectException(HttpException::class);
        $handler = new RethrowHandler();
        $exception = new Forbidden();
        $handler->handleHttpException($exception);
    }
}
