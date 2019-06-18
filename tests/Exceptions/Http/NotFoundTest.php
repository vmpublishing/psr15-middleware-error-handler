<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\NotFound;

class NotFoundTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new NotFound();
        $this->assertEquals(NotFound::STATUS_NOT_FOUND, $exception->getHttpStatusCode());
    }

}
