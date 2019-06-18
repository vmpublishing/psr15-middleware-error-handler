<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\TooEarly;

class TooEarlyTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new TooEarly();
        $this->assertEquals(TooEarly::STATUS_TOO_EARLY, $exception->getHttpStatusCode());
    }
}
