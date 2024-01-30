<?php

namespace Lucasnpinheiro\Invoice\Tests\Unit\Domain\ValueObject;

use Lucasnpinheiro\Invoice\Domain\ValueObject\BooleanValue;
use PHPUnit\Framework\TestCase;

class BooleanValueTest extends TestCase
{
    public function testTrueValue()
    {
        $boolean = BooleanValue::create(true);
        $this->assertTrue($boolean->value());
        $this->assertTrue($boolean->isTrue());
        $this->assertFalse($boolean->isFalse());
    }

    public function testFalseValue()
    {
        $boolean = BooleanValue::create(false);
        $this->assertFalse($boolean->value());
        $this->assertFalse($boolean->isTrue());
        $this->assertTrue($boolean->isFalse());
    }

    public function testToEmpty()
    {
        $boolean = BooleanValue::create();
        $this->assertFalse($boolean->value());
        $this->assertFalse($boolean->isTrue());
        $this->assertTrue($boolean->isFalse());
    }
}