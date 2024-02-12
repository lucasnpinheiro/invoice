<?php

declare(strict_types=1);

namespace NotaFiscal\Tests\Unit\Tags;

use NotaFiscal\Tags\TagIde;
use PHPUnit\Framework\TestCase;

class TagIdeTest extends TestCase
{
    public function testCreate(): void
    {
        $tagIde = TagIde::create(
            'SP',
            'Venda de Produtos',
            '55',
            '001',
            '123456',
            '2022-01-01 10:00:00',
            '2022-01-01 10:30:00',
            '1',
            '1',
            '3550308',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '123',
            '1',
            '456',
            '1',
            '2022-01-01 11:00:00',
            'Justification'
        );

        $this->assertInstanceOf(TagIde::class, $tagIde);
        $this->assertSame('SP', $tagIde->cUF());
        $this->assertSame('Venda de Produtos', $tagIde->natOp());
        $this->assertSame('55', $tagIde->mod());
        $this->assertSame('001', $tagIde->serie());
        $this->assertSame('123456', $tagIde->nNF());
        $this->assertSame('2022-01-01 10:00:00', $tagIde->dhEmi());
        $this->assertSame('2022-01-01 10:30:00', $tagIde->dhSaiEnt());
        $this->assertSame('1', $tagIde->tpNF());
        $this->assertSame('1', $tagIde->idDest());
        $this->assertSame('3550308', $tagIde->cMunFG());
        $this->assertSame('1', $tagIde->tpImp());
        $this->assertSame('1', $tagIde->tpEmis());
        $this->assertSame('1', $tagIde->tpAmb());
        $this->assertSame('1', $tagIde->finNFe());
        $this->assertSame('1', $tagIde->indFinal());
        $this->assertSame('1', $tagIde->indPres());
        $this->assertSame('1', $tagIde->procEmi());
        $this->assertSame('1', $tagIde->verProc());
        $this->assertSame('123', $tagIde->cNF());
        $this->assertSame('1', $tagIde->indPag());
        $this->assertSame('456', $tagIde->cDV());
        $this->assertSame('1', $tagIde->indIntermed());
        $this->assertSame('2022-01-01 11:00:00', $tagIde->dhCont());
        $this->assertSame('Justification', $tagIde->xJus());
    }

    public function testToArray(): void
    {
        $tagIde = TagIde::create(
            'SP',
            'Venda de Produtos',
            '55',
            '001',
            '123456',
            '2022-01-01 10:00:00',
            '2022-01-01 10:30:00',
            '1',
            '1',
            '3550308',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '1',
            '123',
            '1',
            '456',
            '1',
            '2022-01-01 11:00:00',
            'Justification'
        );

        $expectedArray = [
            'cUF' => 'SP',
            'natOp' => 'Venda de Produtos',
            'mod' => '55',
            'serie' => '001',
            'nNF' => '123456',
            'dhEmi' => '2022-01-01 10:00:00',
            'dhSaiEnt' => '2022-01-01 10:30:00',
            'tpNF' => '1',
            'idDest' => '1',
            'cMunFG' => '3550308',
            'tpImp' => '1',
            'tpEmis' => '1',
            'tpAmb' => '1',
            'finNFe' => '1',
            'indFinal' => '1',
            'indPres' => '1',
            'procEmi' => '1',
            'verProc' => '1',
            'cNF' => '123',
            'indPag' => '1',
            'cDV' => '456',
            'indIntermed' => '1',
            'dhCont' => '2022-01-01 11:00:00',
            'xJus' => 'Justification',
        ];

        $this->assertSame($expectedArray, $tagIde->toArray());
    }
}