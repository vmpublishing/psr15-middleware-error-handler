<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\NetworkAuthenticationRequired;

class NetworkAuthenticationRequiredTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new NetworkAuthenticationRequired();
        $this->assertEquals(NetworkAuthenticationRequired::STATUS_NETWORK_AUTHENTICATION_REQUIRED, $exception->getHttpStatusCode());
    }
}
