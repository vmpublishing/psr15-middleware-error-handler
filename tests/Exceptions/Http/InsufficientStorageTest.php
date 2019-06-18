<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\InsufficientStorage;

class InsufficientStorageTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new InsufficientStorage();
        $this->assertEquals(InsufficientStorage::STATUS_INSUFFICIENT_STORAGE, $exception->getHttpStatusCode());
    }
}
