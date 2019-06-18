<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\GatewayTimeout;

class GatewayTimeoutTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new GatewayTimeout();
        $this->assertEquals(GatewayTimeout::STATUS_GATEWAY_TIMEOUT, $exception->getHttpStatusCode());
    }

}
