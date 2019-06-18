<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\UnsupportedMediaType;

class UnsupportedMediaTypeTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new UnsupportedMediaType();
        $this->assertEquals(UnsupportedMediaType::STATUS_UNSUPPORTED_MEDIA_TYPE, $exception->getHttpStatusCode());
    }
}
