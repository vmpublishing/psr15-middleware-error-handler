<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\RequestHeaderFieldsTooLarge;

class RequestHeaderFieldsTooLargeTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new RequestHeaderFieldsTooLarge();
        $this->assertEquals(RequestHeaderFieldsTooLarge::STATUS_REQUEST_HEADER_FIELDS_TOO_LARGE, $exception->getHttpStatusCode());
    }

}
