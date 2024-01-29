<?php
declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Domain\Entity;

use Lucasnpinheiro\Invoice\Domain\ValueObject\IntegerValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\PriceValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\StringValue;

class Item
{
private function __construct(
        private IntegerValue $id,
        private StringValue $name,
        private StringValue $description,
        private PriceValue $quantity,
        private PriceValue $price,
        private Taxes $taxes,
    ) {
    }

    public static function create(
        IntegerValue $id,
        StringValue $name,
        StringValue $description,
        PriceValue $quantity,
        PriceValue $price,
        Taxes $taxes,
    ): self
    {
        return new self(
            $id,
            $name,
            $description,
            $quantity,
            $price,
            $taxes,
        );
    }

}
