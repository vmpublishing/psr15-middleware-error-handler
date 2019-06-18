<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\ExpectationFailed;

class ExpectationFailedTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new ExpectationFailed();
        $this->assertEquals(ExpectationFailed::STATUS_EXPECTATION_FAILED, $exception->getHttpStatusCode());
    }
}
