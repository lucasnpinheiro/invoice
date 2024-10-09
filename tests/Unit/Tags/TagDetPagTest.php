<?php

declare(strict_types=1);

namespace NotaFiscal\Tests\Unit\Tags;

use NotaFiscal\Tags\TagDetPag;
use PHPUnit\Framework\TestCase;

class TagDetPagTest extends TestCase
{
    public function testCreate(): void
    {
        $tagDetPag = TagDetPag::create(
            'credit_card',
            1,
            123.45,
            678.90,
            '1234567890',
            100.0,
            2
        );

        $this->assertInstanceOf(TagDetPag::class, $tagDetPag);
        $this->assertSame('credit_card', $tagDetPag->tPag());
        $this->assertSame(1, $tagDetPag->indPag());
        $this->assertSame(123.45, $tagDetPag->tBand());
        $this->assertSame(678.90, $tagDetPag->cAut());
        $this->assertSame('1234567890', $tagDetPag->CNPJ());
        $this->assertSame(100.0, $tagDetPag->vPag());
        $this->assertSame(2, $tagDetPag->tpIntegra());
    }

    public function testCreateWithNullValues(): void
    {
        $tagDetPag = TagDetPag::create(
            'cash',
            null,
            null,
            null,
            null,
            null,
            null
        );

        $this->assertInstanceOf(TagDetPag::class, $tagDetPag);
        $this->assertSame('cash', $tagDetPag->tPag());
        $this->assertNull($tagDetPag->indPag());
        $this->assertNull($tagDetPag->tBand());
        $this->assertNull($tagDetPag->cAut());
        $this->assertNull($tagDetPag->CNPJ());
        $this->assertNull($tagDetPag->vPag());
        $this->assertNull($tagDetPag->tpIntegra());
    }

    public function testToArray(): void
    {
        $expectedArray = [
            'tPag' => 'credit_card',
            'indPag' => 1,
            'tBand' => 123.45,
            'cAut' => 678.90,
            'CNPJ' => '1234567890',
            'vPag' => 100.0,
            'tpIntegra' => 2,
        ];
        $tagDetPag = TagDetPag::create(...$expectedArray);

        $this->assertSame($expectedArray, $tagDetPag->toArray());
    }
}