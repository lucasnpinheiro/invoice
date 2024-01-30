<?php

declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Domain\Entity;

class InvoiceItens
{
    private $itens = [];

    private function __construct(array $itens = [])
    {
        $this->itens = $itens;
    }

    public static function create(array $itens = []): self
    {
        return new self($itens);
    }

    public function add(Item $iten)
    {
        $this->itens[] = $iten;
    }

    public function toArray(): array
    {
        return $this->itens;
    }
}