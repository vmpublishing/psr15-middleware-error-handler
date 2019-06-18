<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\BadRequest;

class BadRequestTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new BadRequest();
        $this->assertEquals(BadRequest::STATUS_BAD_REQUEST, $exception->getHttpStatusCode());
    }

}
