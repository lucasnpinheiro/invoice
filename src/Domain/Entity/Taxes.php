<?php

declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Domain\Entity;

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
