<?php

declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Domain\ValueObject;

use BaseValueObject\MoneyValueObject;

class PriceValue extends MoneyValueObject
{
    public static function create(?string $value = null): self
    {
        return new self($value ?? '0.00');
    }

    protected function validate($value): bool
    {
        if ((float)$value < 0) {
            throw new \InvalidArgumentException('Price cannot be negative');
        }

        return true;
    }
}
