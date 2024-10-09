<?php

declare(strict_types=1);

namespace NotaFiscal\Tests\Unit\Tags;

use NotaFiscal\Tags\TagTransp;
use PHPUnit\Framework\TestCase;

class TagTranspTest extends TestCase
{
    public function testCreate(): void
    {
        $tagTransp = TagTransp::create(1);

        $this->assertInstanceOf(TagTransp::class, $tagTransp);
        $this->assertSame(1, $tagTransp->refNFe());
    }

    public function testToArray(): void
    {
        $expectedArray = [
            'refNFe' => 1,
        ];
        $tagTransp = TagTransp::create(...$expectedArray);

        $this->assertSame($expectedArray, $tagTransp->toArray());
    }
}