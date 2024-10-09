<?php

declare(strict_types=1);

namespace NotaFiscal\Tests\Unit\Tags;

use NotaFiscal\Tags\TagIcms;
use PHPUnit\Framework\TestCase;

class TagIcmsTest extends TestCase
{
    public function testCreate(): void
    {
        $tagIcms = TagIcms::create(
            1,
            'orig',
            'CST',
            'modBC',
            'vBC',
            'pICMS',
            'vICMS',
            'pMVAST',
            'vBCST',
            'pICMSST',
            'vICMSST'
        );

        $this->assertInstanceOf(TagIcms::class, $tagIcms);
        $this->assertSame(1, $tagIcms->item());
        $this->assertSame('orig', $tagIcms->orig());
        $this->assertSame('CST', $tagIcms->CST());
        $this->assertSame('modBC', $tagIcms->modBC());
        $this->assertSame('vBC', $tagIcms->vBC());
        $this->assertSame('pICMS', $tagIcms->pICMS());
        $this->assertSame('vICMS', $tagIcms->vICMS());
        $this->assertSame('pMVAST', $tagIcms->pMVAST());
        $this->assertSame('vBCST', $tagIcms->vBCST());
        $this->assertSame('pICMSST', $tagIcms->pICMSST());
        $this->assertSame('vICMSST', $tagIcms->vICMSST());
        $this->assertNull($tagIcms->pFCP());
        $this->assertNull($tagIcms->vFCP());
        $this->assertNull($tagIcms->vBCFCP());
        // Add assertions for other nullable properties
    }

    public function testToArray(): void
    {
        $expectedArray = [
            'item' => 1,
            'orig' => 'orig',
            'CST' => 'CST',
            'modBC' => 'modBC',
            'vBC' => 'vBC',
            'pICMS' => 'pICMS',
            'vICMS' => 'vICMS',
            'pMVAST' => 'pMVAST',
            'vBCST' => 'vBCST',
            'pICMSST' => 'pICMSST',
            'vICMSST' => 'vICMSST',
            'pFCP' => null,
            'vFCP' => null,
            'vBCFCP' => null,
            'modBCST' => null,
            'pRedBCST' => null,
            'vBCFCPST' => null,
            'pFCPST' => null,
            'vFCPST' => null,
            'vICMSDeson' => null,
            'motDesICMS' => null,
            'pRedBC' => null,
            'vICMSOp' => null,
            'pDif' => null,
            'vICMSDif' => null,
            'vBCSTRet' => null,
            'pST' => null,
            'vICMSSTRet' => null,
            'vBCFCPSTRet' => null,
            'pFCPSTRet' => null,
            'vFCPSTRet' => null,
            'pRedBCEfet' => null,
            'vBCEfet' => null,
            'pICMSEfet' => null,
            'vICMSEfet' => null,
            'vICMSSubstituto' => null,
            'vICMSSTDeson' => null,
            'motDesICMSST' => null,
            'pFCPDif' => null,
            'vFCPDif' => null,
            'vFCPEfet' => null,
        ];

        $tagIcms = TagIcms::create(...$expectedArray);

        $this->assertSame($expectedArray, $tagIcms->toArray());
    }
}