<?php

declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Domain\Entity;

use Lucasnpinheiro\Invoice\Domain\ValueObject\PriceValue;

abstract class Tax
{
    private function __construct(
        private PriceValue $value,
        private PriceValue $tax,
        private PriceValue $total,
    ) {
        $this->calculate();
    }

    public static function create(
        PriceValue $value,
        PriceValue $tax,
    ): self {
        return new self(
            $value,
            $tax,
            PriceValue::create(),
        );
    }

    public function value(): PriceValue
    {
        return $this->value;
    }

    public function tax(): PriceValue
    {
        return $this->tax;
    }

    public function total(): PriceValue
    {
        return $this->total;
    }

    private function isCalculated(): bool
    {
        return !$this->tax()->isZero() && !$this->value()->isZero();
    }

    public function calculate(): void
    {
        if (!$this->isCalculated()) {
            $this->tax = PriceValue::create();
            $this->value = PriceValue::create();
            $this->total = PriceValue::create();
            return;
        }
        $total = $this->value()->multiply($this->tax()->divide(100)->value());
        $this->total = PriceValue::create($total->value());
    }

    public function toArray(): array
    {
        return [
            'value' => $this->value()->value(),
            'tax' => $this->tax()->value(),
            'total' => $this->total()->value(),
        ];
    }
}