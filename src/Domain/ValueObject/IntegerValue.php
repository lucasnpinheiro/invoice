<?php

declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Domain\ValueObject;

use BaseValueObject\IntValueObject;
use InvalidArgumentException;

class IntegerValue extends IntValueObject
{
    public static function create(?int $value = null): self
    {
        return new self($value ?? 0);
    }

    protected function validate($value): bool
    {
        if ((int)$value < 0) {
            throw new InvalidArgumentException('Integer cannot be negative');
        }

        return true;
    }
}
