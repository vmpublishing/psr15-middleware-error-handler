<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\PayloadTooLarge;

class PayloadTooLargeTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new PayloadTooLarge();
        $this->assertEquals(PayloadTooLarge::STATUS_PAYLOAD_TOO_LARGE, $exception->getHttpStatusCode());
    }
}
