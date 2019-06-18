<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\LoopDetected;

class LoopDetectedTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new LoopDetected();
        $this->assertEquals(LoopDetected::STATUS_LOOP_DETECTED, $exception->getHttpStatusCode());
    }
}
