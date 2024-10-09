<?php

declare(strict_types=1);

namespace NotaFiscal\Tests\Unit\Tags;

use InvalidArgumentException;
use NotaFiscal\Tags\TagTransportadora;
use PHPUnit\Framework\TestCase;

class TagTransportadoraTest extends TestCase
{
    public function testCreate(): void
    {
        $tag = TagTransportadora::create('Teste', 'IE', 'Ender', 'Mun', 'UF', '12345678901');
        $this->assertInstanceOf(TagTransportadora::class, $tag);
    }

    public function testToArray(): void
    {
        $tag = TagTransportadora::create('Teste', 'IE', 'Ender', 'Mun', 'UF', '12345678901');
        $array = $tag->toArray();
        $this->assertArrayHasKey('xNome', $array);
        $this->assertArrayHasKey('IE', $array);
        $this->assertArrayHasKey('xEnder', $array);
        $this->assertArrayHasKey('xMun', $array);
        $this->assertArrayHasKey('UF', $array);
        $this->assertArrayHasKey('CPF_CNPJ', $array);
    }

    public function testXNome(): void
    {
        $tag = TagTransportadora::create('Teste', 'IE', 'Ender', 'Mun', 'UF', '12345678901');
        $this->assertEquals('Teste', $tag->xNome());
    }

    public function testIE(): void
    {
        $tag = TagTransportadora::create('Teste', 'IE', 'Ender', 'Mun', 'UF', '12345678901');
        $this->assertEquals('IE', $tag->IE());
    }

    public function testXEnder(): void
    {
        $tag = TagTransportadora::create('Teste', 'IE', 'Ender', 'Mun', 'UF', '12345678901');
        $this->assertEquals('Ender', $tag->xEnder());
    }

    public function testXMun(): void
    {
        $tag = TagTransportadora::create('Teste', 'IE', 'Ender', 'Mun', 'UF', '12345678901');
        $this->assertEquals('Mun', $tag->xMun());
    }

    public function testUF(): void
    {
        $tag = TagTransportadora::create('Teste', 'IE', 'Ender', 'Mun', 'UF', '12345678901');
        $this->assertEquals('UF', $tag->UF());
    }

    public function testCPF_CNPJ(): void
    {
        $tag = TagTransportadora::create('Teste', 'IE', 'Ender', 'Mun', 'UF', '12345678901');
        $this->assertEquals('12345678901', $tag->CPF_CNPJ());
    }

    public function testIsCpf(): void
    {
        $tag = TagTransportadora::create('Teste', 'IE', 'Ender', 'Mun', 'UF', '12345678901');
        $this->assertTrue($tag->isCpf());
    }

    public function testIsCnpj(): void
    {
        $tag = TagTransportadora::create('Teste', 'IE', 'Ender', 'Mun', 'UF', '12345678901234');
        $this->assertTrue($tag->isCnpj());
    }

    public function testInvalidCPF_CNPJ(): void
    {
        $this->expectException(InvalidArgumentException::class);
        TagTransportadora::create('Teste', 'IE', 'Ender', 'Mun', 'UF', '123456789');
    }

    public function testEmptyCPF_CNPJ(): void
    {
        $tag = TagTransportadora::create('Teste', 'IE', 'Ender', 'Mun', 'UF', '');
        $this->assertNull($tag->CPF_CNPJ());
    }
}