<?php

declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Domain\ValueObject;

use BaseValueObject\BooleanValueObject;

class BooleanValue extends BooleanValueObject
{
    public static function create(?bool $value = null): self
    {
        return new self($value ?? false);
    }
}
