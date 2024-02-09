<?php

declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Tests\Stubs\Domain\Entity\Taxes;

use Lucasnpinheiro\Invoice\Domain\Entity\Taxes\Icms;
use Lucasnpinheiro\Invoice\Domain\ValueObject\PriceValue;

class IcmsStub
{
    public static function random(): Icms
    {
        return Icms::create(
            PriceValue::create('1.95'),
            PriceValue::create('18'),
        );
    }
}