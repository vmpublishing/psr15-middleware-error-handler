<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\LengthRequired;

class LengthRequiredTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new LengthRequired();
        $this->assertEquals(LengthRequired::STATUS_LENGTH_REQUIRED, $exception->getHttpStatusCode());
    }
}
