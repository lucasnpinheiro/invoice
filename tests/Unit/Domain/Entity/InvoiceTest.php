<?php

namespace Lucasnpinheiro\Invoice\Tests\Unit\Domain\Entity;

use Lucasnpinheiro\Invoice\Domain\Entity\Client;
use Lucasnpinheiro\Invoice\Domain\Entity\Invoice;
use Lucasnpinheiro\Invoice\Domain\Entity\InvoiceItens;
use Lucasnpinheiro\Invoice\Domain\ValueObject\IntegerValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\StringValue;
use PHPUnit\Framework\TestCase;

class InvoiceTest extends TestCase
{
    public function testCreateAndGetters()
    {
        $orderId = IntegerValue::create(1);
        $client = $this->createMock(Client::class);
        $itens = $this->createMock(InvoiceItens::class);
        $cfop = StringValue::create('123456');

        $invoice = Invoice::create($orderId, $client, $itens, $cfop);

        $this->assertSame($orderId, $invoice->orderId());
        $this->assertSame($client, $invoice->client());
        $this->assertSame($itens, $invoice->itens());
        $this->assertSame($cfop, $invoice->cfop());
    }

    public function testToArray()
    {
        $orderId = IntegerValue::create(1);
        $client = $this->createMock(Client::class);
        $itens = $this->createMock(InvoiceItens::class);
        $cfop = StringValue::create('123456');

        $invoice = Invoice::create($orderId, $client, $itens, $cfop);

        $expectedArray = [
            'orderId' => $orderId->value(),
            'client' => $client->toArray(),
            'itens' => $itens->toArray(),
            'cfop' => $cfop->value()
        ];

        $this->assertSame($expectedArray, $invoice->toArray());
    }
}