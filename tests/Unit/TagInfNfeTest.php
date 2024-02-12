<?php

declare(strict_types=1);

use NotaFiscal\TagInfNfe;
use PHPUnit\Framework\TestCase;

class TagInfNfeTest extends TestCase
{
    public function testCreate(): void
    {
        $tagInfNfe = TagInfNfe::create(null, null, null);

        $this->assertInstanceOf(TagInfNfe::class, $tagInfNfe);
        $this->assertSame('4.00', $tagInfNfe->versao());
        $this->assertNull($tagInfNfe->pkNItem());
        $this->assertNull($tagInfNfe->id());
    }

    public function testVersao(): void
    {
        $tagInfNfe = TagInfNfe::create('4.00', null, null);

        $this->assertSame('4.00', $tagInfNfe->versao());
    }

    public function testPkNItem(): void
    {
        $tagInfNfe = TagInfNfe::create('4.00', '123', null);

        $this->assertSame('123', $tagInfNfe->pkNItem());
    }

    public function testId(): void
    {
        $tagInfNfe = TagInfNfe::create('4.00', null, '456');

        $this->assertSame('456', $tagInfNfe->id());
    }

    public function testToArray(): void
    {
        $tagInfNfe = TagInfNfe::create('4.00', '123', '456');

        $expectedArray = [
            'versao' => '4.00',
            'pk_nItem' => '123',
            'Id' => '456'
        ];

        $this->assertSame($expectedArray, $tagInfNfe->toArray());
    }
}