<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\VariantAlsoNegotiates;

class VariantAlsoNegotiatesTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new VariantAlsoNegotiates();
        $this->assertEquals(VariantAlsoNegotiates::STATUS_VARIANT_ALSO_NEGOTIATES, $exception->getHttpStatusCode());
    }

}
