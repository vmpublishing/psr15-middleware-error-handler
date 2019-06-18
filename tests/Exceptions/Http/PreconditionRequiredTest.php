<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\PreconditionRequired;

class PreconditionRequiredTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new PreconditionRequired();
        $this->assertEquals(PreconditionRequired::STATUS_PRECONDITION_REQUIRED, $exception->getHttpStatusCode());
    }
}
