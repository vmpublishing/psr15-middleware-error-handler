<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\Conflict;

class ConflictTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new Conflict();
        $this->assertEquals(Conflict::STATUS_CONFLICT, $exception->getHttpStatusCode());
    }

}
