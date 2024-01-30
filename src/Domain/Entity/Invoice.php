<?php

declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Domain\Entity;

use Lucasnpinheiro\Invoice\Domain\ValueObject\StringValue;

class Invoice
{
    private function __construct(
        private int $orderId,
        private Client $client,
        private InvoiceItens $itens,
        private StringValue $cfop
    ) {
    }

    public static function create(
        int $orderId,
        Client $client,
        InvoiceItens $itens,
        StringValue $cfop
    ): self {
        return new self(
            $orderId,
            $client,
            $itens,
            $cfop
        );
    }
}
