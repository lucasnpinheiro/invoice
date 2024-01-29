<?php

namespace Lucasnpinheiro\Invoice\Tests\Unit\Domain\Entity;

use PHPUnit\Framework\TestCase;
use Lucasnpinheiro\Invoice\Domain\Entity\Item;
use Lucasnpinheiro\Invoice\Domain\Entity\Taxes;
use Lucasnpinheiro\Invoice\Domain\ValueObject\IntegerValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\PriceValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\StringValue;

class ItemTest extends TestCase
{
    public function testCreateItem()
    {
        $id = IntegerValue::create(1);
        $name = StringValue::create('Item 1');
        $description = StringValue::create('Description 1');
        $quantity = PriceValue::create('2');
        $price = PriceValue::create('10.00');
        $taxes = Taxes::create(
            StringValue::create('ICMS'),
            PriceValue::create('20.00'),
            PriceValue::create('18'),
        );

        $item = Item::create($id, $name, $description, $quantity, $price, $taxes);

        $this->assertInstanceOf(Item::class, $item);
        $this->assertEquals($id, $item->id());
        $this->assertEquals($name, $item->name());
        $this->assertEquals($description, $item->description());
        $this->assertEquals($quantity, $item->quantity());
        $this->assertEquals($price, $item->price());
        $this->assertEquals($taxes, $item->taxes());
    }

    public function testCalculateTotal()
    {
        $id = IntegerValue::create(1);
        $name = StringValue::create('Item 1');
        $description = StringValue::create('Description 1');
        $quantity = PriceValue::create('2');
        $price = PriceValue::create('10.00');
        $taxes = Taxes::create(
            StringValue::create('ICMS'),
            PriceValue::create('20.00'),
            PriceValue::create('18'),
        );

        $item = Item::create($id, $name, $description, $quantity, $price, $taxes);

        $expectedTotal = PriceValue::create('20.00');
        $this->assertEquals($expectedTotal, $item->total());
    }

    public function testCalculateTotalWithTaxes()
    {
        $id = IntegerValue::create(1);
        $name = StringValue::create('Item 1');
        $description = StringValue::create('Description 1');
        $quantity = PriceValue::create('2');
        $price = PriceValue::create('10.00');
        $taxes = Taxes::create(
            StringValue::create('ICMS'),
            PriceValue::create('20.00'),
            PriceValue::create('18'),
        );

        $item = Item::create($id, $name, $description, $quantity, $price, $taxes);

        $expectedTotalWithTaxes = PriceValue::create('22.35');
        $this->assertEquals($expectedTotalWithTaxes, $item->totalWithTaxes());
    }

    public function testToArray()
    {
        $id = IntegerValue::create(1);
        $name = StringValue::create('Item 1');
        $description = StringValue::create('Description 1');
        $quantity = PriceValue::create('2');
        $price = PriceValue::create('10.00');
        $taxes = Taxes::create(
            StringValue::create('ICMS'),
            PriceValue::create('20.00'),
            PriceValue::create('18'),
        );

        $item = Item::create($id, $name, $description, $quantity, $price, $taxes);

        $expectedArray = [
            'id' => 1,
            'name' => 'Item 1',
            'description' => 'Description 1',
            'quantity' => '2.00',
            'price' => '10.00',
            'taxes' => $taxes->toArray(),
            'total' => '20.00',
            'total_with_taxes' => '23.60',
        ];

        $this->assertEquals($expectedArray, $item->toArray());
    }
}