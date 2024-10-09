<?php

namespace Lucasnpinheiro\NotaFiscal\Dto;

abstract class DtoAbstract
{
    public function toObject(): object
    {
        return (object) $this->toArray();
    }

    abstract public function toArray(): array;
}