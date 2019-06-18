<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\PaymentRequired;

class PaymentRequiredTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new PaymentRequired();
        $this->assertEquals(PaymentRequired::STATUS_PAYMENT_REQUIRED, $exception->getHttpStatusCode());
    }
}
