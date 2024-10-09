<?php

declare(strict_types=1);

namespace NotaFiscal\Tests\Unit\Tags;

use NotaFiscal\Tags\TagEnderEmit;
use PHPUnit\Framework\TestCase;

class TagEnderEmitTest extends TestCase
{
    public function testCreate(): void
    {
        $tagEnderEmit = TagEnderEmit::create(
            'ACME Corp',
            'Street 1',
            '123',
            'Neighborhood',
            '1234567',
            'City',
            'UF',
            '12345678',
            '123',
            'Country',
            '123456789',
            'Additional Info'
        );

        $this->assertInstanceOf(TagEnderEmit::class, $tagEnderEmit);
        $this->assertSame('ACME Corp', $tagEnderEmit->xNome());
        $this->assertSame('Street 1', $tagEnderEmit->xLgr());
        $this->assertSame('123', $tagEnderEmit->nro());
        $this->assertSame('Neighborhood', $tagEnderEmit->xBairro());
        $this->assertSame('1234567', $tagEnderEmit->cMun());
        $this->assertSame('City', $tagEnderEmit->xMun());
        $this->assertSame('UF', $tagEnderEmit->UF());
        $this->assertSame('12345678', $tagEnderEmit->CEP());
        $this->assertSame('123', $tagEnderEmit->cPais());
        $this->assertSame('Country', $tagEnderEmit->xPais());
        $this->assertSame('123456789', $tagEnderEmit->fone());
        $this->assertSame('Additional Info', $tagEnderEmit->xCpl());
    }

    public function testToArray(): void
    {
        $expectedArray = [
            'xNome' => 'ACME Corp',
            'xLgr' => 'Street 1',
            'nro' => '123',
            'xBairro' => 'Neighborhood',
            'cMun' => '1234567',
            'xMun' => 'City',
            'UF' => 'UF',
            'CEP' => '12345678',
            'cPais' => '123',
            'xPais' => 'Country',
            'fone' => '123456789',
            'xCpl' => 'Additional Info',
        ];

        $tagEnderEmit = TagEnderEmit::create(...$expectedArray);

        $this->assertSame($expectedArray, $tagEnderEmit->toArray());
    }
}