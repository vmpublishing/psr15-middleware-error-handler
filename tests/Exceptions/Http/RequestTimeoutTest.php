<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\RequestTimeout;

class RequestTimeoutTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new RequestTimeout();
        $this->assertEquals(RequestTimeout::STATUS_REQUEST_TIMEOUT, $exception->getHttpStatusCode());
    }
}
