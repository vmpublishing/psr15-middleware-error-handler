<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\NotAcceptable;

class NotAcceptableTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new NotAcceptable();
        $this->assertEquals(NotAcceptable::STATUS_NOT_ACCEPTABLE, $exception->getHttpStatusCode());
    }
}
