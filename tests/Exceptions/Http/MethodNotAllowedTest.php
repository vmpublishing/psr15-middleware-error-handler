<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\MethodNotAllowed;

class MethodNotAllowedTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new MethodNotAllowed();
        $this->assertEquals(MethodNotAllowed::STATUS_METHOD_NOT_ALLOWED, $exception->getHttpStatusCode());
    }

}
