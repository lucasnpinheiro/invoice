<?php

declare(strict_types=1);

namespace NotaFiscal\Tests\Unit\Tags;

use NotaFiscal\Tags\TagEmit;
use PHPUnit\Framework\TestCase;

class TagEmitTest extends TestCase
{
    public function testCreate(): void
    {
        $tagEmit = TagEmit::create(
            'ACME Corp',
            'ACME',
            '123456789',
            'CRT',
            '12345678901234',
            'IEST',
            'IM',
            'CNAE',
            '12345678901'
        );

        $this->assertInstanceOf(TagEmit::class, $tagEmit);
        $this->assertSame('ACME Corp', $tagEmit->xNome());
        $this->assertSame('ACME', $tagEmit->xFant());
        $this->assertSame('123456789', $tagEmit->IE());
        $this->assertSame('CRT', $tagEmit->CRT());
        $this->assertSame('12345678901234', $tagEmit->CNPJ());
        $this->assertSame('IEST', $tagEmit->IEST());
        $this->assertSame('IM', $tagEmit->IM());
        $this->assertSame('CNAE', $tagEmit->CNAE());
        $this->assertSame('12345678901', $tagEmit->CPF());
    }

    public function testToArray(): void
    {
        $expectedArray = [
            'xNome' => 'ACME Corp',
            'xFant' => 'ACME',
            'IE' => '123456789',
            'CRT' => 'CRT',
            'CNPJ' => '12345678901234',
            'IEST' => 'IEST',
            'IM' => 'IM',
            'CNAE' => 'CNAE',
            'CPF' => '12345678901'
        ];

        $tagEmit = TagEmit::create(...$expectedArray);

        $this->assertSame($expectedArray, $tagEmit->toArray());
    }
}