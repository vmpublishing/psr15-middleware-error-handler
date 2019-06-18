<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\UnprocessableEntity;

class UnprocessableEntityTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new UnprocessableEntity();
        $this->assertEquals(UnprocessableEntity::STATUS_UNPROCESSABLE_ENTITY, $exception->getHttpStatusCode());
    }
}
