<?php

namespace Lucasnpinheiro\Invoice\Tests\Stubs\Domain;

use Lucasnpinheiro\Invoice\Domain\Entity\Item;
use Lucasnpinheiro\Invoice\Domain\ValueObject\IntegerValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\PriceValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\StringValue;

class ItemStub
{
    public static function random(): Item
    {
        $id = IntegerValue::create(1);
        $name = StringValue::create('Item 1');
        $description = StringValue::create('Description 1');
        $quantity = PriceValue::create('2');
        $price = PriceValue::create('10.00');

        return Item::create($id, $name, $description, $quantity, $price);
    }
}
