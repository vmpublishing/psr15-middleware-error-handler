<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\RangeNotSatisfiable;

class RangeNotSatisfiableTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new RangeNotSatisfiable();
        $this->assertEquals(RangeNotSatisfiable::STATUS_RANGE_NOT_SATISFIABLE, $exception->getHttpStatusCode());
    }

}
