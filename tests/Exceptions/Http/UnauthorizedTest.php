<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\Unauthorized;

class UnauthorizedTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new Unauthorized();
        $this->assertEquals(Unauthorized::STATUS_UNAUTHORIZED, $exception->getHttpStatusCode());
    }
}
