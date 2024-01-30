<?php

namespace Lucasnpinheiro\Invoice\Tests\Unit\Domain\Entity;

use Lucasnpinheiro\Invoice\Domain\Entity\Item;
use Lucasnpinheiro\Invoice\Domain\Entity\Tax;
use Lucasnpinheiro\Invoice\Domain\ValueObject\IntegerValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\PriceValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\StringValue;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    public function testCreateItem()
    {
        $id = IntegerValue::create(1);
        $name = StringValue::create('Item 1');
        $description = StringValue::create('Description 1');
        $quantity = PriceValue::create('2');
        $price = PriceValue::create('10.00');

        $item = Item::create($id, $name, $description, $quantity, $price);

        $this->assertInstanceOf(Item::class, $item);
        $this->assertEquals($id, $item->id());
        $this->assertEquals($name, $item->name());
        $this->assertEquals($description, $item->description());
        $this->assertEquals($quantity, $item->quantity());
        $this->assertEquals($price, $item->price());
    }

    public function testCalculateTotal()
    {
        $id = IntegerValue::create(1);
        $name = StringValue::create('Item 1');
        $description = StringValue::create('Description 1');
        $quantity = PriceValue::create('2');
        $price = PriceValue::create('10.00');

        $item = Item::create($id, $name, $description, $quantity, $price);

        $expectedTotal = PriceValue::create('20.00');
        $this->assertEquals($expectedTotal, $item->total());
    }

    public function testToArray()
    {
        $id = IntegerValue::create(1);
        $name = StringValue::create('Item 1');
        $description = StringValue::create('Description 1');
        $quantity = PriceValue::create('2');
        $price = PriceValue::create('10.00');

        $item = Item::create($id, $name, $description, $quantity, $price);

        $tax = Tax::create(
            StringValue::create('ICMS'),
            PriceValue::create('20.00'),
            PriceValue::create('18'),
        );

        $tax->calculate();

        $item->taxes()->add($tax);

        $expectedArray = [
            'id' => 1,
            'name' => 'Item 1',
            'description' => 'Description 1',
            'quantity' => '2.00',
            'price' => '10.00',
            'taxes' => [$tax->toArray()],
            'total' => '20.00',
        ];

        $this->assertEquals($expectedArray, $item->toArray());
    }
}
