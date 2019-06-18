<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\UriTooLong;

class UriTooLongTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new UriTooLong();
        $this->assertEquals(UriTooLong::STATUS_URI_TOO_LONG, $exception->getHttpStatusCode());
    }
}
