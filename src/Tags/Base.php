<?php

declare(strict_types=1);

namespace Lucasnpinheiro\NotaFiscal\Tags;

abstract class Base
{
    public function toObject(): object
    {
        return (object)$this->toArray();
    }

    abstract public function toArray(): array;
}