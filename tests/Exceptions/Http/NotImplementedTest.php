<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\NotImplemented;

class NotImplementedTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new NotImplemented();
        $this->assertEquals(NotImplemented::STATUS_NOT_IMPLEMENTED, $exception->getHttpStatusCode());
    }
}
