<?php

namespace Lucasnpinheiro\Invoice\Tests\Unit\Domain\Entity;

use PHPUnit\Framework\TestCase;
use Lucasnpinheiro\Invoice\Domain\Entity\Tax;
use Lucasnpinheiro\Invoice\Domain\ValueObject\PriceValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\StringValue;

class TaxTest extends TestCase
{
    public function testInstanceOf()
    {
        $tax = Tax::create(
            StringValue::create('ICMS'),
            PriceValue::create('1.95'),
            PriceValue::create('18'),
        );

        $this->assertInstanceOf(Tax::class, $tax);
        $this->assertEquals('ICMS', $tax->taxName()->value());
        $this->assertEquals('1.95', $tax->value()->value());
        $this->assertEquals('18.00', $tax->tax()->value());
        $this->assertEquals('0.00', $tax->total()->value());
        $this->assertTrue($tax->isCalculated()->value());
    }

    public function testDisabledCalculate()
    {
        $tax = Tax::create(
            StringValue::create('ICMS'),
            PriceValue::create('1.95'),
            PriceValue::create('18'),
        );

        $tax->disabledCalculate();
        $tax->calculate();

        $this->assertInstanceOf(Tax::class, $tax);
        $this->assertEquals('ICMS', $tax->taxName()->value());
        $this->assertEquals('0.00', $tax->value()->value());
        $this->assertEquals('0.00', $tax->tax()->value());
        $this->assertEquals('0.00', $tax->total()->value());
        $this->assertFalse($tax->isCalculated()->value());
    }

    public function testEnabledCalculate()
    {
        $tax = Tax::create(
            StringValue::create('ICMS'),
            PriceValue::create('1.95'),
            PriceValue::create('18'),
        );

        $tax->enabledCalculate();
        $tax->calculate();

        $this->assertInstanceOf(Tax::class, $tax);
        $this->assertEquals('ICMS', $tax->taxName()->value());
        $this->assertEquals('1.95', $tax->value()->value());
        $this->assertEquals('18.00', $tax->tax()->value());
        $this->assertEquals('0.35', $tax->total()->value());
        $this->assertTrue($tax->isCalculated()->value());
    }
}
