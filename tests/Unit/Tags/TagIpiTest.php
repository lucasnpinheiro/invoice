<?php

declare(strict_types=1);

namespace NotaFiscal\Tests\Unit\Tags;

use NotaFiscal\Tags\TagIpi;
use PHPUnit\Framework\TestCase;

class TagIpiTest extends TestCase
{
    public function testCreate(): void
    {
        $tagIpi = TagIpi::create(
            1,
            'cEnq',
            'CST',
            10.5,
            100.0,
            5.0,
            true,
            'clEnq',
            'CNPJProd',
            'cSelo',
            2.0,
            3.0,
            4.0
        );

        $this->assertInstanceOf(TagIpi::class, $tagIpi);
        $this->assertSame(1, $tagIpi->item());
        $this->assertSame('cEnq', $tagIpi->cEnq());
        $this->assertSame('CST', $tagIpi->CST());
        $this->assertSame(10.5, $tagIpi->vIPI());
        $this->assertSame(100.0, $tagIpi->vBC());
        $this->assertSame(5.0, $tagIpi->pIPI());
        $this->assertTrue($tagIpi->destacaIpi());
        $this->assertSame('clEnq', $tagIpi->clEnq());
        $this->assertSame('CNPJProd', $tagIpi->CNPJProd());
        $this->assertSame('cSelo', $tagIpi->cSelo());
        $this->assertSame(2.0, $tagIpi->qSelo());
        $this->assertSame(3.0, $tagIpi->qUnid());
        $this->assertSame(4.0, $tagIpi->vUnid());
    }

    public function testAplicarIpi(): void
    {
        $tagIpi = TagIpi::create(
            1,
            'cEnq',
            'CST',
            10.5,
            100.0,
            5.0,
            false,
            'clEnq',
            'CNPJProd',
            'cSelo',
            2.0,
            3.0,
            4.0
        );

        $tagIpi->aplicarIpi();

        $this->assertSame(0.0, $tagIpi->vIPI());
        $this->assertSame(0.0, $tagIpi->vBC());
        $this->assertSame(0.0, $tagIpi->pIPI());
    }

    public function testToArray(): void
    {
        $tagIpi = TagIpi::create(
            1,
            'cEnq',
            'CST',
            10.5,
            100.0,
            5.0,
            true,
            'clEnq',
            'CNPJProd',
            'cSelo',
            2.0,
            3.0,
            4.0
        );

        $expectedArray = [
            'item' => 1,
            'cEnq' => 'cEnq',
            'CST' => 'CST',
            'vIPI' => 10.5,
            'vBC' => 100.0,
            'pIPI' => 5.0,
            'destacaIpi' => true,
            'clEnq' => 'clEnq',
            'CNPJProd' => 'CNPJProd',
            'cSelo' => 'cSelo',
            'qSelo' => 2.0,
            'qUnid' => 3.0,
            'vUnid' => 4.0,
        ];

        $this->assertSame($expectedArray, $tagIpi->toArray());
    }
}