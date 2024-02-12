<?php

declare(strict_types=1);

namespace NotaFiscal\Tests\Unit\Tags;

use NotaFiscal\Tags\TagProd;
use PHPUnit\Framework\TestCase;

class TagProdTest extends TestCase
{
    public function testCreate(): void
    {
        $tagProd = TagProd::create(
            1,
            '1234567890123',
            '1234567890123',
            'PROD001',
            'Product 1',
            '12345678',
            '1234',
            'UN',
            '10',
            '5.99',
            '59.90',
            'UN',
            '10',
            '5.99',
            '1',
            '1',
            '10.00',
            '2.00',
            '3.00',
            '1.00',
            '12345678901234',
            'Benefit',
            'EXTIPI',
            '12345678901234',
            'Order123'
        );

        $this->assertInstanceOf(TagProd::class, $tagProd);
        $this->assertSame(1, $tagProd->item());
        $this->assertSame('1234567890123', $tagProd->cEAN());
        $this->assertSame('1234567890123', $tagProd->cEANTrib());
        $this->assertSame('PROD001', $tagProd->cProd());
        $this->assertSame('Product 1', $tagProd->xProd());
        $this->assertSame('12345678', $tagProd->NCM());
        $this->assertSame('1234', $tagProd->CFOP());
        $this->assertSame('UN', $tagProd->uCom());
        $this->assertSame('10', $tagProd->qCom());
        $this->assertSame('5.99', $tagProd->vUnCom());
        $this->assertSame('59.90', $tagProd->vProd());
        $this->assertSame('UN', $tagProd->uTrib());
        $this->assertSame('10', $tagProd->qTrib());
        $this->assertSame('5.99', $tagProd->vUnTrib());
        $this->assertSame('1', $tagProd->nItemPed());
        $this->assertSame('1', $tagProd->indTot());
        $this->assertSame('10.00', $tagProd->vFrete());
        $this->assertSame('2.00', $tagProd->vDesc());
        $this->assertSame('3.00', $tagProd->vOutro());
        $this->assertSame('1.00', $tagProd->vSeg());
        $this->assertSame('12345678901234', $tagProd->cBarra());
        $this->assertSame('Benefit', $tagProd->cBenef());
        $this->assertSame('EXTIPI', $tagProd->EXTIPI());
        $this->assertSame('12345678901234', $tagProd->cBarraTrib());
        $this->assertSame('Order123', $tagProd->xPed());
    }

    public function testToArray(): void
    {
        $tagProd = TagProd::create(
            1,
            '1234567890123',
            '1234567890123',
            'PROD001',
            'Product 1',
            '12345678',
            '1234',
            'UN',
            '10',
            '5.99',
            '59.90',
            'UN',
            '10',
            '5.99',
            '1',
            '1',
            '10.00',
            '2.00',
            '3.00',
            '1.00',
            '12345678901234',
            'Benefit',
            'EXTIPI',
            '12345678901234',
            'Order123'
        );

        $expectedArray = [
            'item' => 1,
            'cEAN' => '1234567890123',
            'cEANTrib' => '1234567890123',
            'cProd' => 'PROD001',
            'xProd' => 'Product 1',
            'NCM' => '12345678',
            'CFOP' => '1234',
            'uCom' => 'UN',
            'qCom' => '10',
            'vUnCom' => '5.99',
            'vProd' => '59.90',
            'uTrib' => 'UN',
            'qTrib' => '10',
            'vUnTrib' => '5.99',
            'nItemPed' => '1',
            'indTot' => '1',
            'vFrete' => '10.00',
            'vDesc' => '2.00',
            'vOutro' => '3.00',
            'vSeg' => '1.00',
            'cBarra' => '12345678901234',
            'cBenef' => 'Benefit',
            'EXTIPI' => 'EXTIPI',
            'cBarraTrib' => '12345678901234',
            'xPed' => 'Order123',
        ];

        $this->assertSame($expectedArray, $tagProd->toArray());
    }
}