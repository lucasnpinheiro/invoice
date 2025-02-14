<?php

declare(strict_types=1);

namespace Lucasnpinheiro\NotaFiscal\Tests\Unit\Tags;

use DateTime;
use Lucasnpinheiro\NotaFiscal\Tags\TagDup;
use PHPUnit\Framework\TestCase;

class TagDupTest extends TestCase
{
    public function testCreate(): void
    {
        $tagDup = TagDup::create('DUP123', '2022-01-01', 50.0);

        $this->assertInstanceOf(TagDup::class, $tagDup);
        $this->assertSame('DUP123', $tagDup->nDup());
        $this->assertSame('2022-01-01', $tagDup->dVenc());
        $this->assertSame(50.0, $tagDup->vDup());
    }

    public function testCreateWithDateTime(): void
    {
        $dVenc = new DateTime('2022-01-01');
        $tagDup = TagDup::create('DUP123', $dVenc, 50.0);

        $this->assertInstanceOf(TagDup::class, $tagDup);
        $this->assertSame('DUP123', $tagDup->nDup());
        $this->assertSame('2022-01-01', $tagDup->dVenc());
        $this->assertSame(50.0, $tagDup->vDup());
    }

    public function testToArray(): void
    {
        $expectedArray = [
            'nDup' => 'DUP123',
            'dVenc' => '2022-01-01',
            'vDup' => 50.0,
        ];

        $tagDup = TagDup::create(...$expectedArray);

        $this->assertSame($expectedArray, $tagDup->toArray());
    }
}