<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\VersionNotSupported;

class VersionNotSupportedTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new VersionNotSupported();
        $this->assertEquals(VersionNotSupported::STATUS_VERSION_NOT_SUPPORTED, $exception->getHttpStatusCode());
    }
}
