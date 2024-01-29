<?php

namespace Lucasnpinheiro\Invoice\Domain\Entity;

use Lucasnpinheiro\Invoice\Domain\ValueObject\BooleanValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\PriceValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\StringValue;

class Taxes
{
    private function __construct(
        private StringValue $taxName,
        private PriceValue $value,
        private PriceValue $tax,
        private PriceValue $total,
        private BooleanValue $isCalculated,
    ) {}

    public static function create(
        StringValue $taxName,
        PriceValue $value,
        PriceValue $tax,
    ): self {
        return new self(
            $taxName,
            $value,
            $tax,
            PriceValue::create(),
            BooleanValue::create(true),
        );
    }

    public function taxName(): StringValue
    {
        return $this->taxName;
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

    public function isCalculated(): BooleanValue
    {
        return $this->isCalculated;
    }

    public function calculate(): void
    {
        if($this->isCalculated()->isFalse()) {
            $this->tax = PriceValue::create();
            $this->value = PriceValue::create();
            $this->total = PriceValue::create();
            return;
        }
        $total = $this->value()->multiply($this->tax()->divide(100)->value());
        $this->total = PriceValue::create($total->value());
    }

    public function disabledCalculate(): void
    {
        $this->isCalculated = BooleanValue::create(false);
    }

    public function enabledCalculate(): void
    {
        $this->isCalculated = BooleanValue::create(true);
    }

    public function toArray(): array
    {
        return [
            'taxName' => $this->taxName()->value(),
            'value' => $this->value()->value(),
            'tax' => $this->tax()->value(),
            'total' => $this->total()->value(),
            'is_calculated' => $this->isCalculated(),
        ];
    }
}
