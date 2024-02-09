<?php

declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Tests\Stubs\Domain\Entity;

use Lucasnpinheiro\Invoice\Domain\Entity\Item;
use Lucasnpinheiro\Invoice\Domain\ValueObject\IntegerValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\PriceValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\StringValue;
use Lucasnpinheiro\Invoice\Tests\Stubs\Domain\Entity\Taxes\CofinsStub;
use Lucasnpinheiro\Invoice\Tests\Stubs\Domain\Entity\Taxes\IcmsStub;
use Lucasnpinheiro\Invoice\Tests\Stubs\Domain\Entity\Taxes\IpiStub;
use Lucasnpinheiro\Invoice\Tests\Stubs\Domain\Entity\Taxes\PisStub;

class ItemStub
{
    public static function random(): Item
    {
        return Item::create(
            IntegerValue::create(1),
            StringValue::create('name'),
            StringValue::create('ean'),
            StringValue::create('ncm'),
            StringValue::create('cfop'),
            StringValue::create('sigla'),
            StringValue::create('orderPurchase'),
            StringValue::create('referenceSupplier'),
            StringValue::create('nameCompletion'),
            StringValue::create('cest'),
            StringValue::create('origin'),
            StringValue::create('csosn'),
            StringValue::create('cst'),
            PriceValue::create('1'),
            PriceValue::create('1'),
            PriceValue::create('1'),
            PriceValue::create('1'),
            PriceValue::create('1'),
            PriceValue::create('1'),
            PriceValue::create('1'),
            IcmsStub::random(),
            PisStub::random(),
            IpiStub::random(),
            CofinsStub::random(),
        );
    }
}
