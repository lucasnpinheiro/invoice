<?php

declare(strict_types=1);

use NotaFiscal\TagVol;
use PHPUnit\Framework\TestCase;

class TagVolTest extends TestCase
{
    public function testCreate(): void
    {
        $tagVol = TagVol::create(
            1,
            2,
            3,
            10.5,
            'Caixa',
            'Marca A'
        );

        $this->assertInstanceOf(TagVol::class, $tagVol);
        $this->assertSame(1, $tagVol->item());
        $this->assertSame(2, $tagVol->qVol());
        $this->assertSame(3, $tagVol->nVol());
        $this->assertSame(10.5, $tagVol->peso());
        $this->assertSame('Caixa', $tagVol->esp());
        $this->assertSame('Marca A', $tagVol->marca());
    }

    public function testCreateWithNullMarca(): void
    {
        $tagVol = TagVol::create(
            1,
            2,
            3,
            10.5,
            'Caixa',
            null
        );

        $this->assertInstanceOf(TagVol::class, $tagVol);
        $this->assertSame(1, $tagVol->item());
        $this->assertSame(2, $tagVol->qVol());
        $this->assertSame(3, $tagVol->nVol());
        $this->assertSame(10.5, $tagVol->peso());
        $this->assertSame('Caixa', $tagVol->esp());
        $this->assertNull($tagVol->marca());
    }

    public function testToArray(): void
    {
        $tagVol = TagVol::create(
            1,
            2,
            3,
            10.5,
            'Caixa',
            'Marca A'
        );

        $expectedArray = [
            'item' => 1,
            'qVol' => 2,
            'nVol' => 3,
            'peso' => 10.5,
            'esp' => 'Caixa',
            'marca' => 'Marca A',
        ];

        $this->assertSame($expectedArray, $tagVol->toArray());
    }
}