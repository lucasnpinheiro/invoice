<?php

namespace Lucasnpinheiro\Invoice\Tests\Unit\Domain\ValueObject;

use PHPUnit\Framework\TestCase;
use Lucasnpinheiro\Invoice\Domain\ValueObject\BooleanValue;

class BooleanValueTest extends TestCase
{
    public function testTrueValue()
    {
        $boolean= BooleanValue::create(true);
        $this->assertTrue($boolean->value());
    }

    public function testFalseValue()
    {
        $boolean= BooleanValue::create(false);
        $this->assertFalse($boolean->value());
    }

    public function testToEmpty()
    {
        $boolean= BooleanValue::create();
        $this->assertFalse($boolean->value());
    }
}