<?php

namespace Lucasnpinheiro\Invoice\Tests\Unit\Domain\ValueObject;

use InvalidArgumentException;
use Lucasnpinheiro\Invoice\Domain\ValueObject\IntegerValue;
use PHPUnit\Framework\TestCase;

class IntegerValueTest extends TestCase
{
    public function testGetValue()
    {
        $integer = IntegerValue::create(10);
        $this->assertEquals('10', $integer->value());
    }

    public function testToString()
    {
        $integer = IntegerValue::create(1);
        $this->assertEquals('1', $integer->__toString());
    }

    public function testNegativeValueReturnException()
    {
        $this->expectException(InvalidArgumentException::class);
        $integer = IntegerValue::create(-5);
        $this->assertEquals('-5', $integer->value());
    }

    public function testZeroValue()
    {
        $integer = IntegerValue::create(0);
        $this->assertEquals('0', $integer->value());
    }

    public function testNullValue()
    {
        $integer = IntegerValue::create();
        $this->assertEquals('0', $integer->value());
    }
}