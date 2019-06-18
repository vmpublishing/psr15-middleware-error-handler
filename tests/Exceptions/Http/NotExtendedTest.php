<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\NotExtended;

class NotExtendedTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new NotExtended();
        $this->assertEquals(NotExtended::STATUS_NOT_EXTENDED, $exception->getHttpStatusCode());
    }
}
