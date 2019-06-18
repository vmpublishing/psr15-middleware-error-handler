<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\UnavailableForLegalReasons;

class UnavailableForLegalReasonsTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new UnavailableForLegalReasons();
        $this->assertEquals(UnavailableForLegalReasons::STATUS_UNAVAILABLE_FOR_LEGAL_REASONS, $exception->getHttpStatusCode());
    }

}
