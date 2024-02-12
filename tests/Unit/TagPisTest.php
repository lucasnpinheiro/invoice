<?php

declare(strict_types=1);

use NotaFiscal\TagPis;
use PHPUnit\Framework\TestCase;

class TagPisTest extends TestCase
{
    public function testCreate(): void
    {
        $tagPis = TagPis::create(1, 'CST123', 100.0, 0.5, 50.0);

        $this->assertInstanceOf(TagPis::class, $tagPis);
        $this->assertSame(1, $tagPis->item());
        $this->assertSame('CST123', $tagPis->CST());
        $this->assertSame(100.0, $tagPis->vBC());
        $this->assertSame(0.5, $tagPis->pPIS());
        $this->assertSame(50.0, $tagPis->vPIS());
        $this->assertNull($tagPis->qBCProd());
        $this->assertNull($tagPis->vAliqProd());
    }

    public function testQBCProd(): void
    {
        $tagPis = TagPis::create(1, 'CST123', 100.0, 0.5, 50.0, 10.0);

        $this->assertSame(10.0, $tagPis->qBCProd());
    }

    public function testVAliqProd(): void
    {
        $tagPis = TagPis::create(1, 'CST123', 100.0, 0.5, 50.0, null, '10%');

        $this->assertSame('10%', $tagPis->vAliqProd());
    }

    public function testToArray(): void
    {
        $tagPis = TagPis::create(1, 'CST123', 100.0, 0.5, 50.0, 10.0, '10%');

        $expectedArray = [
            'item' => 1,
            'CST' => 'CST123',
            'vBC' => 100.0,
            'pPIS' => 0.5,
            'vPIS' => 50.0,
            'qBCProd' => 10.0,
            'vAliqProd' => '10%',
        ];

        $this->assertSame($expectedArray, $tagPis->toArray());
    }
}