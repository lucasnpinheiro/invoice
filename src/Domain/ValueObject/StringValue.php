<?php

declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Domain\ValueObject;

use BaseValueObject\StringValueObject;

class StringValue extends StringValueObject
{
    public static function create(?string $value = null): self
    {
        return new self($value ?? '');
    }
}
