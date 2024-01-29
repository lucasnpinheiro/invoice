<?php

namespace Lucasnpinheiro\Invoice\Domain\Entity;

use Lucasnpinheiro\Invoice\Domain\ValueObject\BooleanValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\PriceValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\StringValue;

class Taxes
{
    private function __construct(
        private array $taxes = [],
    ) {
    }

    public static function create(?array $taxes = []): self
    {
        return new self($taxes ?? []);
    }

    public function add(Tax $tax): void
    {
        $this->taxes[] = $tax;
    }

    public function toArray(): array
    {
        $taxes = [];
        /** @var Tax $tax */
        foreach ($this->taxes as $tax) {
            $tax->calculate();
            $taxes[] = $tax->toArray();
        }
        return $taxes;
    }
}
