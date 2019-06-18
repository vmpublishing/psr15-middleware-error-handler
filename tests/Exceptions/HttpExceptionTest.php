<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\HttpException;

class HttpExceptionTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new HttpException();
        $this->assertEquals(HttpException::STATUS_INTERNAL_SERVER_ERROR, $exception->getHttpStatusCode());
    }

}
