<?php

declare(strict_types=1);

use NotaFiscal\TagCest;
use PHPUnit\Framework\TestCase;

class TagCestTest extends TestCase
{
    public function testCreate(): void
    {
        $tagCest = TagCest::create(
            1,
            '12345678',
            'Escala',
            '12345678901234'
        );

        $this->assertInstanceOf(TagCest::class, $tagCest);
        $this->assertSame(1, $tagCest->item());
        $this->assertSame('12345678', $tagCest->CEST());
        $this->assertSame('Escala', $tagCest->indEscala());
        $this->assertSame('12345678901234', $tagCest->CNPJFab());
    }

    public function testCreateWithNullCNPJFab(): void
    {
        $tagCest = TagCest::create(
            1,
            '12345678',
            'Escala',
            null
        );

        $this->assertInstanceOf(TagCest::class, $tagCest);
        $this->assertSame(1, $tagCest->item());
        $this->assertSame('12345678', $tagCest->CEST());
        $this->assertSame('Escala', $tagCest->indEscala());
        $this->assertNull($tagCest->CNPJFab());
    }

    public function testToArray(): void
    {
        $tagCest = TagCest::create(
            1,
            '12345678',
            'Escala',
            '12345678901234'
        );

        $expectedArray = [
            'item' => 1,
            'CEST' => '12345678',
            'indEscala' => 'Escala',
            'CNPJFab' => '12345678901234',
        ];

        $this->assertSame($expectedArray, $tagCest->toArray());
    }

    public function testToArrayWithNullCNPJFab(): void
    {
        $tagCest = TagCest::create(
            1,
            '12345678',
            'Escala',
            null
        );

        $expectedArray = [
            'item' => 1,
            'CEST' => '12345678',
            'indEscala' => 'Escala',
            'CNPJFab' => null,
        ];

        $this->assertSame($expectedArray, $tagCest->toArray());
    }
}