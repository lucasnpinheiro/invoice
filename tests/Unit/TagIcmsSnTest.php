<?php

declare(strict_types=1);

use NotaFiscal\TagIcmsSn;
use PHPUnit\Framework\TestCase;

class TagIcmsSnTest extends TestCase
{
    public function testCreate(): void
    {
        $tagIcmsSn = TagIcmsSn::create(
            1,
            'orig',
            'CSOSN',
            'CST',
            'vBCST',
            'pICMSST',
            'vICMSST',
            'vBC',
            'pICMS',
            'vICMS',
            'pMVAST',
            'pCredSN',
            'vCredICMSSN',
            'modBCST',
            'pRedBCST',
            'vBCFCPST',
            'pFCPST',
            'vFCPST',
            'vBCSTRet',
            'pST',
            'vICMSSTRet',
            'vBCFCPSTRet',
            'pFCPSTRet',
            'vFCPSTRet',
            'modBC',
            'pRedBC',
            'pRedBCEfet',
            'vBCEfet',
            'pICMSEfet',
            'vICMSEfet',
            'vICMSSubstituto'
        );

        $this->assertInstanceOf(TagIcmsSn::class, $tagIcmsSn);
        $this->assertSame(1, $tagIcmsSn->item());
        $this->assertSame('orig', $tagIcmsSn->orig());
        $this->assertSame('CSOSN', $tagIcmsSn->CSOSN());
        $this->assertSame('CST', $tagIcmsSn->CST());
        $this->assertSame('vBCST', $tagIcmsSn->vBCST());
        $this->assertSame('pICMSST', $tagIcmsSn->pICMSST());
        $this->assertSame('vICMSST', $tagIcmsSn->vICMSST());
        $this->assertSame('vBC', $tagIcmsSn->vBC());
        $this->assertSame('pICMS', $tagIcmsSn->pICMS());
        $this->assertSame('vICMS', $tagIcmsSn->vICMS());
        $this->assertSame('pMVAST', $tagIcmsSn->pMVAST());
        $this->assertSame('pCredSN', $tagIcmsSn->pCredSN());
        $this->assertSame('vCredICMSSN', $tagIcmsSn->vCredICMSSN());
        $this->assertSame('modBCST', $tagIcmsSn->modBCST());
        $this->assertSame('pRedBCST', $tagIcmsSn->pRedBCST());
        $this->assertSame('vBCFCPST', $tagIcmsSn->vBCFCPST());
        $this->assertSame('pFCPST', $tagIcmsSn->pFCPST());
        $this->assertSame('vFCPST', $tagIcmsSn->vFCPST());
        $this->assertSame('vBCSTRet', $tagIcmsSn->vBCSTRet());
        $this->assertSame('pST', $tagIcmsSn->pST());
        $this->assertSame('vICMSSTRet', $tagIcmsSn->vICMSSTRet());
        $this->assertSame('vBCFCPSTRet', $tagIcmsSn->vBCFCPSTRet());
        $this->assertSame('pFCPSTRet', $tagIcmsSn->pFCPSTRet());
        $this->assertSame('vFCPSTRet', $tagIcmsSn->vFCPSTRet());
        $this->assertSame('modBC', $tagIcmsSn->modBC());
        $this->assertSame('pRedBC', $tagIcmsSn->pRedBC());
        $this->assertSame('pRedBCEfet', $tagIcmsSn->pRedBCEfet());
        $this->assertSame('vBCEfet', $tagIcmsSn->vBCEfet());
        $this->assertSame('pICMSEfet', $tagIcmsSn->pICMSEfet());
        $this->assertSame('vICMSEfet', $tagIcmsSn->vICMSEfet());
        $this->assertSame('vICMSSubstituto', $tagIcmsSn->vICMSSubstituto());
    }

    public function testToArray(): void
    {
        $tagIcmsSn = TagIcmsSn::create(
            1,
            'orig',
            'CSOSN',
            'CST',
            'vBCST',
            'pICMSST',
            'vICMSST',
            'vBC',
            'pICMS',
            'vICMS',
            'pMVAST',
            'pCredSN',
            'vCredICMSSN',
            'modBCST',
            'pRedBCST',
            'vBCFCPST',
            'pFCPST',
            'vFCPST',
            'vBCSTRet',
            'pST',
            'vICMSSTRet',
            'vBCFCPSTRet',
            'pFCPSTRet',
            'vFCPSTRet',
            'modBC',
            'pRedBC',
            'pRedBCEfet',
            'vBCEfet',
            'pICMSEfet',
            'vICMSEfet',
            'vICMSSubstituto'
        );

        $expectedArray = [
            'item' => 1,
            'orig' => 'orig',
            'CSOSN' => 'CSOSN',
            'CST' => 'CST',
            'vBCST' => 'vBCST',
            'pICMSST' => 'pICMSST',
            'vICMSST' => 'vICMSST',
            'vBC' => 'vBC',
            'pICMS' => 'pICMS',
            'vICMS' => 'vICMS',
            'pMVAST' => 'pMVAST',
            'pCredSN' => 'pCredSN',
            'vCredICMSSN' => 'vCredICMSSN',
            'modBCST' => 'modBCST',
            'pRedBCST' => 'pRedBCST',
            'vBCFCPST' => 'vBCFCPST',
            'pFCPST' => 'pFCPST',
            'vFCPST' => 'vFCPST',
            'vBCSTRet' => 'vBCSTRet',
            'pST' => 'pST',
            'vICMSSTRet' => 'vICMSSTRet',
            'vBCFCPSTRet' => 'vBCFCPSTRet',
            'pFCPSTRet' => 'pFCPSTRet',
            'vFCPSTRet' => 'vFCPSTRet',
            'modBC' => 'modBC',
            'pRedBC' => 'pRedBC',
            'pRedBCEfet' => 'pRedBCEfet',
            'vBCEfet' => 'vBCEfet',
            'pICMSEfet' => 'pICMSEfet',
            'vICMSEfet' => 'vICMSEfet',
            'vICMSSubstituto' => 'vICMSSubstituto',
        ];

        $this->assertSame($expectedArray, $tagIcmsSn->toArray());
    }
}