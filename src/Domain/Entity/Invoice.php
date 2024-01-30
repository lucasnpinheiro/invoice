<?php

declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Domain\Entity;

class Invoice
{
    private function __construct(
        private int $orderId,
        private Client $client,
        private InvoiceItens $itens,
        private Cfop $cfop,
        private Note $note,
    ) {
    }

    public static function create(
        int $orderId,
        Client $client,
        InvoiceItens $itens,
        Cfop $cfop,
        Note $note,
    ): self {
        return new self(
            $orderId, $client, $itens, $cfop, $note,
        );
    }
}
