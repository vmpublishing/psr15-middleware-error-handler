<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\Gone;

class GoneTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new Gone();
        $this->assertEquals(Gone::STATUS_GONE, $exception->getHttpStatusCode());
    }
}
