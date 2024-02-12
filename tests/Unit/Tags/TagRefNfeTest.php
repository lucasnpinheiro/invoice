<?php

declare(strict_types=1);

namespace NotaFiscal\Tests\Unit\Tags;

use NotaFiscal\Tags\TagRefNfe;
use PHPUnit\Framework\TestCase;

class TagRefNfeTest extends TestCase
{
    public function testCreate(): void
    {
        $tagRefNfe = TagRefNfe::create('1234567890');

        $this->assertInstanceOf(TagRefNfe::class, $tagRefNfe);
        $this->assertSame('1234567890', $tagRefNfe->refNFe());
    }

    public function testRefNFe(): void
    {
        $tagRefNfe = TagRefNfe::create('1234567890');

        $this->assertSame('1234567890', $tagRefNfe->refNFe());
    }

    public function testToArray(): void
    {
        $tagRefNfe = TagRefNfe::create('1234567890');

        $expectedArray = [
            'refNFe' => '1234567890',
        ];

        $this->assertSame($expectedArray, $tagRefNfe->toArray());
    }

    public function testToObject(): void
    {
        $tagRefNfe = TagRefNfe::create('1234567890');

        $expectedObject = new \stdClass();
        $expectedObject->refNFe = '1234567890';

        $this->assertEquals($expectedObject, $tagRefNfe->toObject());
    }
}