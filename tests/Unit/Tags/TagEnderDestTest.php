<?php

declare(strict_types=1);

namespace NotaFiscal\Tests\Unit\Tags;

use NotaFiscal\Tags\TagEnderDest;
use PHPUnit\Framework\TestCase;

class TagEnderDestTest extends TestCase
{
    public function testCreate(): void
    {
        $tagEnderDest = TagEnderDest::create(
            'John Doe',
            '123 Main St',
            '456',
            'Downtown',
            '12345',
            'City',
            'NY',
            '12345',
            '123',
            'Country',
            '123456789',
            'Apt 1'
        );

        $this->assertInstanceOf(TagEnderDest::class, $tagEnderDest);
        $this->assertSame('John Doe', $tagEnderDest->xNome());
        $this->assertSame('123 Main St', $tagEnderDest->xLgr());
        $this->assertSame('456', $tagEnderDest->nro());
        $this->assertSame('Downtown', $tagEnderDest->xBairro());
        $this->assertSame('12345', $tagEnderDest->cMun());
        $this->assertSame('City', $tagEnderDest->xMun());
        $this->assertSame('NY', $tagEnderDest->UF());
        $this->assertSame('12345', $tagEnderDest->CEP());
        $this->assertSame('123', $tagEnderDest->cPais());
        $this->assertSame('Country', $tagEnderDest->xPais());
        $this->assertSame('123456789', $tagEnderDest->fone());
        $this->assertSame('Apt 1', $tagEnderDest->xCpl());
    }

    public function testToArray(): void
    {
        $tagEnderDest = TagEnderDest::create(
            'John Doe',
            '123 Main St',
            '456',
            'Downtown',
            '12345',
            'City',
            'NY',
            '12345',
            '123',
            'Country',
            '123456789',
            'Apt 1'
        );

        $expectedArray = [
            'xNome' => 'John Doe',
            'xLgr' => '123 Main St',
            'nro' => '456',
            'xBairro' => 'Downtown',
            'cMun' => '12345',
            'xMun' => 'City',
            'UF' => 'NY',
            'CEP' => '12345',
            'cPais' => '123',
            'xPais' => 'Country',
            'fone' => '123456789',
            'xCpl' => 'Apt 1',
        ];

        $this->assertSame($expectedArray, $tagEnderDest->toArray());
    }
}