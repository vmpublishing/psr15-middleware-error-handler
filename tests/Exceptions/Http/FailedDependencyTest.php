<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\FailedDependency;

class FailedDependencyTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new FailedDependency();
        $this->assertEquals(FailedDependency::STATUS_FAILED_DEPENDENCY, $exception->getHttpStatusCode());
    }
}
