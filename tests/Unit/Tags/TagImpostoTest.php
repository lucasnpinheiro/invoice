<?php

declare(strict_types=1);

namespace NotaFiscal\Tests\Unit\Tags;

use NotaFiscal\Tags\TagImposto;
use PHPUnit\Framework\TestCase;

class TagImpostoTest extends TestCase
{
    public function testCreate(): void
    {
        $tagImposto = TagImposto::create(1, '100.00');

        $this->assertInstanceOf(TagImposto::class, $tagImposto);
        $this->assertSame(1, $tagImposto->item());
        $this->assertSame('100.00', $tagImposto->vTotTrib());
    }

    public function testItem(): void
    {
        $tagImposto = TagImposto::create(1, '100.00');

        $this->assertSame(1, $tagImposto->item());
    }

    public function testVTotTrib(): void
    {
        $tagImposto = TagImposto::create(1, '100.00');

        $this->assertSame('100.00', $tagImposto->vTotTrib());
    }

    public function testToArray(): void
    {
        $tagImposto = TagImposto::create(1, '100.00');

        $expectedArray = [
            'item' => 1,
            'vTotTrib' => '100.00',
        ];

        $this->assertSame($expectedArray, $tagImposto->toArray());
    }
}