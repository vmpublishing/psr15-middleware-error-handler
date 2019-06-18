<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\ServiceUnavailable;

class ServiceUnavailableTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new ServiceUnavailable();
        $this->assertEquals(ServiceUnavailable::STATUS_SERVICE_UNAVAILABLE, $exception->getHttpStatusCode());
    }

}
