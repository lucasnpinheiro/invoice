<?php

declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Tests\Unit\Domain\Entity;

use Lucasnpinheiro\Invoice\Domain\Entity\Item;
use Lucasnpinheiro\Invoice\Tests\Stubs\Domain\Entity\ItemStub;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    public function testCreateItem()
    {
        $stub = ItemStub::random();

        $item = Item::create(
            $stub->id(),
            $stub->name(),
            $stub->ean(),
            $stub->ncm(),
            $stub->cfop(),
            $stub->sigla(),
            $stub->orderPurchase(),
            $stub->referenceSupplier(),
            $stub->nameCompletion(),
            $stub->cest(),
            $stub->origin(),
            $stub->csosn(),
            $stub->cst(),
            $stub->quantity(),
            $stub->price(),
            $stub->otherExpenses(),
            $stub->discount(),
            $stub->taxes(),
            $stub->credit(),
            $stub->creditPercentage(),
            $stub->icms(),
            $stub->pis(),
            $stub->ipi(),
            $stub->cofins(),
        );

        $this->assertInstanceOf(Item::class, $item);
        $this->assertEquals($stub->id(), $item->id());
        $this->assertEquals($stub->name(), $item->name());
        $this->assertEquals($stub->ean(), $item->ean());
        $this->assertEquals($stub->ncm(), $item->ncm());
        $this->assertEquals($stub->cfop(), $item->cfop());
        $this->assertEquals($stub->sigla(), $item->sigla());
        $this->assertEquals($stub->orderPurchase(), $item->orderPurchase());
        $this->assertEquals($stub->referenceSupplier(), $item->referenceSupplier());
        $this->assertEquals($stub->nameCompletion(), $item->nameCompletion());
        $this->assertEquals($stub->cest(), $item->cest());
        $this->assertEquals($stub->origin(), $item->origin());
        $this->assertEquals($stub->csosn(), $item->csosn());
        $this->assertEquals($stub->cst(), $item->cst());
        $this->assertEquals($stub->quantity(), $item->quantity());
        $this->assertEquals($stub->price(), $item->price());
        $this->assertEquals($stub->otherExpenses(), $item->otherExpenses());
        $this->assertEquals($stub->discount(), $item->discount());
        $this->assertEquals($stub->taxes(), $item->taxes());
        $this->assertEquals($stub->credit(), $item->credit());
        $this->assertEquals($stub->creditPercentage(), $item->creditPercentage());
        $this->assertEquals($stub->icms(), $item->icms());
        $this->assertEquals($stub->pis(), $item->pis());
        $this->assertEquals($stub->ipi(), $item->ipi());
        $this->assertEquals($stub->cofins(), $item->cofins());
        $this->assertEquals($stub->total(), $item->total());

        $this->assertEquals($stub->toArray(), $item->toArray());
    }
}