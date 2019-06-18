<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\BadGateway;

class BadGatewayTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new BadGateway();
        $this->assertEquals(BadGateway::STATUS_BAD_GATEWAY, $exception->getHttpStatusCode());
    }

}
