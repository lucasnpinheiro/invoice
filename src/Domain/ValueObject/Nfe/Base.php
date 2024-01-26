<?php

declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Domain\ValueObject\Nfe;

abstract class Base
{
    abstract public function toArray(): array;

    public function toObject(): object
    {
        return (object) $this->toArray();
    }
}
