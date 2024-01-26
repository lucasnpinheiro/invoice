<?php

namespace Lucasnpinheiro\Invoice\Tests\Unit\Domain\ValueObject;

use PHPUnit\Framework\TestCase;
use Lucasnpinheiro\Invoice\Domain\ValueObject\PriceValue;

class PriceValueTest extends TestCase
{
    public function testGetValue()
    {
        $price = PriceValue::create(10.99);
        $this->assertEquals('10.99', $price->value());
    }

    public function testToString()
    {
        $price = PriceValue::create(10.99);
        $this->assertEquals('10.99', $price->__toString());
    }

    public function testNegativeValueReturnException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $price = PriceValue::create(-5.99);
        $this->assertEquals('-5.99', $price->value());
    }

    public function testZeroValue()
    {
        $price = PriceValue::create(0);
        $this->assertEquals('0.00', $price->value());
    }

    public function testNullValue()
    {
        $price = PriceValue::create();
        $this->assertEquals('0.00', $price->value());
    }
}