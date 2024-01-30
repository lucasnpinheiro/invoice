<?php

declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Domain\Entity;

use Lucasnpinheiro\Invoice\Domain\ValueObject\IntegerValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\StringValue;

class Invoice
{
    private function __construct(
        private IntegerValue $orderId,
        private Client $client,
        private InvoiceItens $itens,
        private StringValue $cfop
    ) {
    }

    public static function create(
        IntegerValue $orderId,
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

    public function orderId(): IntegerValue
    {
        return $this->orderId;
    }

    public function client(): Client
    {
        return $this->client;
    }

    public function itens(): InvoiceItens
    {
        return $this->itens;
    }

    public function cfop(): StringValue
    {
        return $this->cfop;
    }

    public function toArray(): array
    {
        return [
            'orderId' => $this->orderId->value(),
            'client' => $this->client->toArray(),
            'itens' => $this->itens->toArray(),
            'cfop' => $this->cfop->value()
        ];
    }

}
