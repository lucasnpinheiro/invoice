<?php

declare(strict_types=1);

use NotaFiscal\TagTransportadora;
use PHPUnit\Framework\TestCase;

class TagTransportadoraTest extends TestCase
{
    public function testCreate(): void
    {
        $tagTransportadora = TagTransportadora::create(
            'Transportadora ABC',
            '123456789',
            'Rua A',
            'Cidade B',
            'UF',
            '12345678901'
        );

        $this->assertInstanceOf(TagTransportadora::class, $tagTransportadora);
        $this->assertSame('Transportadora ABC', $tagTransportadora->xNome());
        $this->assertSame('123456789', $tagTransportadora->IE());
        $this->assertSame('Rua A', $tagTransportadora->xEnder());
        $this->assertSame('Cidade B', $tagTransportadora->xMun());
        $this->assertSame('UF', $tagTransportadora->UF());
        $this->assertSame('12345678901', $tagTransportadora->CPF());
        $this->assertSame(null, $tagTransportadora->CNPJ());
    }

    public function testCreateWithNullValues(): void
    {
        $tagTransportadora = TagTransportadora::create('Transportadora XYZ');

        $this->assertInstanceOf(TagTransportadora::class, $tagTransportadora);
        $this->assertSame('Transportadora XYZ', $tagTransportadora->xNome());
        $this->assertNull($tagTransportadora->IE());
        $this->assertNull($tagTransportadora->xEnder());
        $this->assertNull($tagTransportadora->xMun());
        $this->assertNull($tagTransportadora->UF());
        $this->assertNull($tagTransportadora->CPF());
        $this->assertNull($tagTransportadora->CNPJ());
    }

    public function testCPF(): void
    {
        $tagTransportadora = TagTransportadora::create(
            'Transportadora XYZ',
            null,
            null,
            null,
            null,
            '123.456.789-01'
        );

        $this->assertSame('12345678901', $tagTransportadora->CPF());
    }

    public function testCNPJ(): void
    {
        $tagTransportadora = TagTransportadora::create(
            'Transportadora XYZ',
            null,
            null,
            null,
            null,
            '12.345.678/0001-90'
        );

        $this->assertSame('12345678000190', $tagTransportadora->CNPJ());
    }

    public function testToArray(): void
    {
        $tagTransportadora = TagTransportadora::create(
            'Transportadora ABC',
            '123456789',
            'Rua A',
            'Cidade B',
            'UF',
            '12345678901'
        );

        $expectedArray = [
            'xNome' => 'Transportadora ABC',
            'IE' => '123456789',
            'xEnder' => 'Rua A',
            'xMun' => 'Cidade B',
            'UF' => 'UF',
            'CPF' => '12345678901',
            'CNPJ' => null,
        ];

        $this->assertSame($expectedArray, $tagTransportadora->toArray());
    }
}