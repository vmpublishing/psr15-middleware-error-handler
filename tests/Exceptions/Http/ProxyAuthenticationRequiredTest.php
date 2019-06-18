<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\ProxyAuthenticationRequired;

class ProxyAuthenticationRequiredTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new ProxyAuthenticationRequired();
        $this->assertEquals(ProxyAuthenticationRequired::STATUS_PROXY_AUTHENTICATION_REQUIRED, $exception->getHttpStatusCode());
    }

}
