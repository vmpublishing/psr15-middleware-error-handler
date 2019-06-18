<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\MisdirectedRequest;

class MisdirectedRequestTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new MisdirectedRequest();
        $this->assertEquals(MisdirectedRequest::STATUS_MISDIRECTED_REQUEST, $exception->getHttpStatusCode());
    }

}
