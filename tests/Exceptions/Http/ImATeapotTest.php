<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\ImATeapot;

class ImATeapotTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new ImATeapot();
        $this->assertEquals(ImATeapot::STATUS_IM_A_TEAPOT, $exception->getHttpStatusCode());
    }
}
