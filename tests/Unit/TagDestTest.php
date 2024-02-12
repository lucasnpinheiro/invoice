<?php

declare(strict_types=1);

use NotaFiscal\TagDest;
use PHPUnit\Framework\TestCase;

class TagDestTest extends TestCase
{
    public function testCreate(): void
    {
        $tagDest = TagDest::create(
            'John Doe',
            '1',
            '123456789',
            '12345678901',
            'ISUF123',
            'IM123',
            'john@example.com',
            '123456',
        );

        $this->assertInstanceOf(TagDest::class, $tagDest);
        $this->assertSame('John Doe', $tagDest->xNome());
        $this->assertSame('1', $tagDest->indIEDest());
        $this->assertSame('123456789', $tagDest->IE());
        $this->assertSame('12345678901', $tagDest->CPF());
        $this->assertSame('ISUF123', $tagDest->ISUF());
        $this->assertSame('IM123', $tagDest->IM());
        $this->assertSame('john@example.com', $tagDest->email());
        $this->assertSame('123456', $tagDest->idEstrangeiro());
    }

    public function testToArray(): void
    {
        $tagDest = TagDest::create(
            'John Doe',
            '1',
            '123456789',
            '12345678901',
            'ISUF123',
            'IM123',
            'john@example.com',
            '123456',
        );

        $expectedArray = [
            'xNome' => 'John Doe',
            'indIEDest' => '1',
            'IE' => '123456789',
            'CPF' => '12345678901',
            'CNPJ' => null,
            'ISUF' => 'ISUF123',
            'IM' => 'IM123',
            'email' => 'john@example.com',
            'idEstrangeiro' => '123456',
        ];

        $this->assertSame($expectedArray, $tagDest->toArray());
    }
}