<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Exceptions\Http;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\Http\UpgradeRequired;

class UpgradeRequiredTest extends TestCase
{
    public function testStatusCode(): void
    {
        $exception = new UpgradeRequired();
        $this->assertEquals(UpgradeRequired::STATUS_UPGRADE_REQUIRED, $exception->getHttpStatusCode());
    }
}
