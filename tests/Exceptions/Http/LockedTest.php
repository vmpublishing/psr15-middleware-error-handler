<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\Locked;

class LockedTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new Locked();
        $this->assertEquals(Locked::STATUS_LOCKED, $exception->getHttpStatusCode());
    }

}
