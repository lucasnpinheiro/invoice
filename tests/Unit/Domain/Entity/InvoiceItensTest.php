<?php

namespace Lucasnpinheiro\Invoice\Tests\Unit\Domain\Entity;

use Lucasnpinheiro\Invoice\Domain\Entity\InvoiceItens;
use Lucasnpinheiro\Invoice\Tests\Stubs\Domain\ItemStub;
use PHPUnit\Framework\TestCase;

class InvoiceItensTest extends TestCase
{
    public function testCreateInvoiceItens()
    {
        $invoiceItens = InvoiceItens::create();
        $this->assertInstanceOf(InvoiceItens::class, $invoiceItens);
    }

    public function testAddItem()
    {
        $invoiceItens = InvoiceItens::create();
        $item = ItemStub::random();
        $invoiceItens->add($item);
        $this->assertCount(1, $invoiceItens->toArray());
        $this->assertEquals($item, $invoiceItens->toArray()[0]);
    }

    public function testToArray()
    {
        $invoiceItens = InvoiceItens::create();
        $item1 = ItemStub::random();
        $item2 = ItemStub::random();
        $invoiceItens->add($item1);
        $invoiceItens->add($item2);
        $this->assertCount(2, $invoiceItens->toArray());
        $this->assertEquals([$item1, $item2], $invoiceItens->toArray());
    }
}
