<?php

declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Tests\Stubs\Domain\Entity\Taxes;

use Lucasnpinheiro\Invoice\Domain\Entity\Taxes\Pis;
use Lucasnpinheiro\Invoice\Domain\ValueObject\PriceValue;

class PisStub
{
    public static function random(): Pis
    {
        return Pis::create(
            PriceValue::create('1.65'),
            PriceValue::create('0'),
        );
    }
}