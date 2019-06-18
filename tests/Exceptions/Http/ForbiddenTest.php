<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\Forbidden;

class ForbiddenTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new Forbidden();
        $this->assertEquals(Forbidden::STATUS_FORBIDDEN, $exception->getHttpStatusCode());
    }

}
