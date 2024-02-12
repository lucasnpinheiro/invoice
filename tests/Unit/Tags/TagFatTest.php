<?php

declare(strict_types=1);

namespace NotaFiscal\Tests\Unit\Tags;

use NotaFiscal\Tags\TagFat;
use PHPUnit\Framework\TestCase;

class TagFatTest extends TestCase
{
    public function testCreate(): void
    {
        $tagFat = TagFat::create('FAT123', 100.0, 90.0, 10.0);

        $this->assertInstanceOf(TagFat::class, $tagFat);
        $this->assertSame('FAT123', $tagFat->nFat());
        $this->assertSame(100.0, $tagFat->vOrig());
        $this->assertSame(90.0, $tagFat->vLiq());
        $this->assertSame(10.0, $tagFat->vDesc());
    }

    public function testCreateWithNullVDesc(): void
    {
        $tagFat = TagFat::create('FAT123', 100.0, 90.0);

        $this->assertInstanceOf(TagFat::class, $tagFat);
        $this->assertSame('FAT123', $tagFat->nFat());
        $this->assertSame(100.0, $tagFat->vOrig());
        $this->assertSame(90.0, $tagFat->vLiq());
        $this->assertNull($tagFat->vDesc());
    }

    public function testToArray(): void
    {
        $tagFat = TagFat::create('FAT123', 100.0, 90.0, 10.0);

        $expectedArray = [
            'nFat' => 'FAT123',
            'vOrig' => 100.0,
            'vLiq' => 90.0,
            'vDesc' => 10.0,
        ];

        $this->assertSame($expectedArray, $tagFat->toArray());
    }
}