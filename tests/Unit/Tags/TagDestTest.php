<?php

declare(strict_types=1);

namespace NotaFiscal\Tests\Unit\Tags;

use InvalidArgumentException;
use NotaFiscal\Tags\TagDest;
use PHPUnit\Framework\TestCase;

class TagDestTest extends TestCase
{
    public function testCreate(): void
    {
        $tagDest = TagDest::create(
            'Test',
            '1',
            '123456789',
            '12345678901',
            '123',
            '123',
            'test@example.com',
            '123'
        );

        $this->assertInstanceOf(TagDest::class, $tagDest);
    }

    public function testToArray(): void
    {
        $expectedArray = [
            'xNome' => 'Test',
            'indIEDest' => '1',
            'IE' => '123456789',
            'CPF_CNPJ' => '12345678901',
            'ISUF' => '123',
            'IM' => '123',
            'email' => 'test@example.com',
            'idEstrangeiro' => '123',
        ];
        $tagDest = TagDest::create(...$expectedArray);

        $this->assertEquals($expectedArray, $tagDest->toArray());
    }

    public function testIsCpf(): void
    {
        $tagDest = TagDest::create(
            'Test',
            '1',
            '123456789',
            '12345678901',
            '123',
            '123',
            'test@example.com',
            '123'
        );

        $this->assertTrue($tagDest->isCpf());
    }

    public function testIsCnpj(): void
    {
        $tagDest = TagDest::create(
            'Test',
            '1',
            '123456789',
            '12345678901234',
            '123',
            '123',
            'test@example.com',
            '123'
        );

        $this->assertTrue($tagDest->isCnpj());
    }

    public function testInvalidCpfCnpj(): void
    {
        $this->expectException(InvalidArgumentException::class);

        TagDest::create(
            'Test',
            '1',
            '123456789',
            ' invalid',
            '123',
            '123',
            'test@example.com',
            '123'
        );
    }
}