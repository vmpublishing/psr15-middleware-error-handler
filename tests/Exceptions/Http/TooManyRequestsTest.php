<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\TooManyRequests;

class TooManyRequestsTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new TooManyRequests();
        $this->assertEquals(TooManyRequests::STATUS_TOO_MANY_REQUESTS, $exception->getHttpStatusCode());
    }
}
