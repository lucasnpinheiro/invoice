<?php

declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Tests\Unit\Domain\Entity\Taxes;


use Lucasnpinheiro\Invoice\Domain\Entity\Taxes\Ipi;
use Lucasnpinheiro\Invoice\Domain\ValueObject\PriceValue;
use PHPUnit\Framework\TestCase;

class IpiTest extends TestCase
{
    public function testInstanceOf()
    {
        $tax = Ipi::create(
            PriceValue::create('1.95'),
            PriceValue::create('18'),
        );

        $this->assertInstanceOf(Ipi::class, $tax);
        $this->assertEquals('1.95', $tax->value()->value());
        $this->assertEquals('18.00', $tax->tax()->value());
        $this->assertEquals('0.35', $tax->total()->value());
    }

}
