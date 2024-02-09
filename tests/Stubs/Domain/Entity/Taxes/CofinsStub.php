<?php

declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Tests\Stubs\Domain\Entity\Taxes;

use Lucasnpinheiro\Invoice\Domain\Entity\Taxes\Cofins;
use Lucasnpinheiro\Invoice\Domain\ValueObject\PriceValue;

class CofinsStub
{
    public static function random(): Cofins
    {
        return Cofins::create(
            PriceValue::create('1.95'),
            PriceValue::create('18'),
        );
    }
}