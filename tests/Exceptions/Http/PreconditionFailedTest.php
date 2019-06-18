<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\PreconditionFailed;

class PreconditionFailedTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new PreconditionFailed();
        $this->assertEquals(PreconditionFailed::STATUS_PRECONDITION_FAILED, $exception->getHttpStatusCode());
    }

}
