<?php

namespace Lucasnpinheiro\Invoice\Tests\Unit\Domain\Entity;

use Lucasnpinheiro\Invoice\Domain\Entity\Tax;
use Lucasnpinheiro\Invoice\Domain\Entity\Taxes;
use Lucasnpinheiro\Invoice\Domain\ValueObject\PriceValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\StringValue;
use PHPUnit\Framework\TestCase;

class TaxesTest extends TestCase
{
    public function testInstanceOf()
    {
        $taxes = Taxes::create();

        $this->assertInstanceOf(Taxes::class, $taxes);
    }

    public function testAddTax()
    {
        $tax = Tax::create(
            StringValue::create('ICMS'),
            PriceValue::create('1.95'),
            PriceValue::create('18'),
        );
        $taxes = Taxes::create([$tax]);

        $this->assertInstanceOf(Taxes::class, $taxes);
        $this->assertCount(1, $taxes->toArray());
    }
}
