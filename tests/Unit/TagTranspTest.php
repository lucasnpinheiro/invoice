<?php

declare(strict_types=1);

use NotaFiscal\TagTransp;
use PHPUnit\Framework\TestCase;

class TagTranspTest extends TestCase
{
    public function testCreate(): void
    {
        $tagTransp = TagTransp::create(1);

        $this->assertInstanceOf(TagTransp::class, $tagTransp);
        $this->assertSame(1, $tagTransp->modFrete());
    }

    public function testToArray(): void
    {
        $tagTransp = TagTransp::create(1);

        $expectedArray = [
            'refNFe' => 1,
        ];

        $this->assertSame($expectedArray, $tagTransp->toArray());
    }
}