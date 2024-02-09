<?php

declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Tests\Stubs\Domain\Entity\Taxes;

use Lucasnpinheiro\Invoice\Domain\Entity\Taxes\Ipi;
use Lucasnpinheiro\Invoice\Domain\ValueObject\PriceValue;

class IpiStub
{
    public static function random(): Ipi
    {
        return Ipi::create(
            PriceValue::create('1.65'),
            PriceValue::create('0'),
        );
    }
}