<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\InternalServerError;

class InternalServerErrorTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new InternalServerError();
        $this->assertEquals(InternalServerError::STATUS_INTERNAL_SERVER_ERROR, $exception->getHttpStatusCode());
    }

}
