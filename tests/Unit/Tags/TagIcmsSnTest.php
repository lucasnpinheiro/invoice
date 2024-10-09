<?php

declare(strict_types=1);

namespace Lucasnpinheiro\NotaFiscal\Tests\Unit\Tags;

use Lucasnpinheiro\NotaFiscal\Tags\TagIcmsSn;
use PHPUnit\Framework\TestCase;

class TagIcmsSnTest extends TestCase
{
    public function testCreate(): void
    {
        $tagIcmsSn = TagIcmsSn::create(
            1,
            0,
            'CSOSN',
            'CST',
            0.0,
            0.0,
            0.0,
            0.0,
            0.0,
            0.0,
            0.0,
        );

        $this->assertInstanceOf(TagIcmsSn::class, $tagIcmsSn);
        $this->assertSame(1, $tagIcmsSn->item());
        $this->assertSame(0, $tagIcmsSn->orig());
        $this->assertSame('CSOSN', $tagIcmsSn->CSOSN());
        $this->assertSame('CST', $tagIcmsSn->CST());
        $this->assertSame(0.0, $tagIcmsSn->vBCST());
        $this->assertSame(0.0, $tagIcmsSn->pICMSST());
        $this->assertSame(0.0, $tagIcmsSn->vICMSST());
        $this->assertSame(0.0, $tagIcmsSn->vBC());
        $this->assertSame(0.0, $tagIcmsSn->pICMS());
        $this->assertSame(0.0, $tagIcmsSn->vICMS());
        $this->assertSame(0.0, $tagIcmsSn->pMVAST());
        $this->assertNull($tagIcmsSn->pCredSN());
        $this->assertNull($tagIcmsSn->vCredICMSSN());
        $this->assertNull($tagIcmsSn->modBCST());
        $this->assertNull($tagIcmsSn->pRedBCST());
        $this->assertNull($tagIcmsSn->vBCFCPST());
        $this->assertNull($tagIcmsSn->pFCPST());
        $this->assertNull($tagIcmsSn->vFCPST());
        $this->assertNull($tagIcmsSn->vBCSTRet());
        $this->assertNull($tagIcmsSn->pST());
        $this->assertNull($tagIcmsSn->vICMSSTRet());
        $this->assertNull($tagIcmsSn->vBCFCPSTRet());
        $this->assertNull($tagIcmsSn->pFCPSTRet());
        $this->assertNull($tagIcmsSn->vFCPSTRet());
        $this->assertNull($tagIcmsSn->modBC());
        $this->assertNull($tagIcmsSn->pRedBC());
        $this->assertNull($tagIcmsSn->pRedBCEfet());
        $this->assertNull($tagIcmsSn->vBCEfet());
        $this->assertNull($tagIcmsSn->pICMSEfet());
        $this->assertNull($tagIcmsSn->vICMSEfet());
        $this->assertNull($tagIcmsSn->vICMSSubstituto());
    }

    public function testToArray(): void
    {
        $expectedArray = [
            'item' => 1,
            'orig' => 0,
            'CSOSN' => 'CSOSN',
            'CST' => 'CST',
            'vBCST' => 0.0,
            'pICMSST' => 0.0,
            'vICMSST' => 0.0,
            'vBC' => 0.0,
            'pICMS' => 0.0,
            'vICMS' => 0.0,
            'pMVAST' => 0.0,
            'pCredSN' => null,
            'vCredICMSSN' => null,
            'modBCST' => null,
            'pRedBCST' => null,
            'vBCFCPST' => null,
            'pFCPST' => null,
            'vFCPST' => null,
            'vBCSTRet' => null,
            'pST' => null,
            'vICMSSTRet' => null,
            'vBCFCPSTRet' => null,
            'pFCPSTRet' => null,
            'vFCPSTRet' => null,
            'modBC' => null,
            'pRedBC' => null,
            'pRedBCEfet' => null,
            'vBCEfet' => null,
            'pICMSEfet' => null,
            'vICMSEfet' => null,
            'vICMSSubstituto' => null,
        ];
        $tagIcmsSn = TagIcmsSn::create(...$expectedArray);

        $this->assertSame($expectedArray, $tagIcmsSn->toArray());
    }

    public function testCsosn900(): void
    {
        $tagIcmsSn = TagIcmsSn::create(
            1,
            0,
            '900',
            'CST',
            0.0,
            0.0,
            0.0,
            0.0,
            0.0,
            0.0,
            0.0,
        );

        $tagIcmsSn->csosn900();

        $this->assertSame(3, $tagIcmsSn->modBC());
        $this->assertSame(0.0, $tagIcmsSn->pICMSST());
        $this->assertSame(4, $tagIcmsSn->modBCST());
        $this->assertSame(0.0, $tagIcmsSn->vBCST());
        $this->assertSame(0.0, $tagIcmsSn->vICMSST());
    }

    public function testCsosn500(): void
    {
        $tagIcmsSn = TagIcmsSn::create(
            1,
            0,
            '500',
            'CST',
            0.0,
            0.0,
            0.0,
            0.0,
            0.0,
            0.0,
            0.0,
        );

        $tagIcmsSn->csosn500();

        $this->assertSame(0, $tagIcmsSn->orig());
        $this->assertSame(0.0, $tagIcmsSn->vBCSTRet());
        $this->assertSame(0.0, $tagIcmsSn->pST());
        $this->assertSame(0.0, $tagIcmsSn->vICMSSubstituto());
        $this->assertSame(0.0, $tagIcmsSn->vICMSSTRet());
    }
}