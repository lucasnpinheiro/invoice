<?php

declare(strict_types=1);

use NotaFiscal\TagIcmsTotal;
use PHPUnit\Framework\TestCase;

class TagIcmsTotalTest extends TestCase
{
    public function testCreate(): void
    {
        $tagIcmsTotal = TagIcmsTotal::create(
            100.0,
            50.0,
            10.0,
            80.0,
            20.0,
            200.0,
            30.0,
            40.0,
            5.0,
            0.0,
            15.0,
            8.0,
            12.0,
            2.0,
            500.0,
            100.0,
            50.0,
            60.0,
            70.0,
            5.0,
            10.0,
            20.0,
            3.0,
            4,
            true
        );

        $this->assertInstanceOf(TagIcmsTotal::class, $tagIcmsTotal);
        $this->assertSame(100.0, $tagIcmsTotal->vBC());
        $this->assertSame(50.0, $tagIcmsTotal->vICMS());
        $this->assertSame(10.0, $tagIcmsTotal->vICMSDeson());
        $this->assertSame(80.0, $tagIcmsTotal->vBCST());
        $this->assertSame(20.0, $tagIcmsTotal->vST());
        $this->assertSame(200.0, $tagIcmsTotal->vProd());
        $this->assertSame(30.0, $tagIcmsTotal->vFrete());
        $this->assertSame(40.0, $tagIcmsTotal->vSeg());
        $this->assertSame(5.0, $tagIcmsTotal->vDesc());
        $this->assertSame(0.0, $tagIcmsTotal->vII());
        $this->assertSame(15.0, $tagIcmsTotal->vIPI());
        $this->assertSame(8.0, $tagIcmsTotal->vPIS());
        $this->assertSame(12.0, $tagIcmsTotal->vCOFINS());
        $this->assertSame(2.0, $tagIcmsTotal->vOutro());
        $this->assertSame(500.0, $tagIcmsTotal->vNF());
        $this->assertSame(100.0, $tagIcmsTotal->vTotTrib());
        $this->assertSame(50.0, $tagIcmsTotal->vFCPUFDest());
        $this->assertSame(60.0, $tagIcmsTotal->vICMSUFDest());
        $this->assertSame(70.0, $tagIcmsTotal->vICMSUFRemet());
        $this->assertSame(5.0, $tagIcmsTotal->vFCP());
        $this->assertSame(10.0, $tagIcmsTotal->vFCPST());
        $this->assertSame(20.0, $tagIcmsTotal->vFCPSTRet());
        $this->assertSame(0.0, $tagIcmsTotal->vIPIDevol());
        $this->assertSame(4, $tagIcmsTotal->finalidadeNfe());
        $this->assertTrue($tagIcmsTotal->destacaIpi());
    }

    public function testAplicarIpiWithDestacaIpi(): void
    {
        $tagIcmsTotal = TagIcmsTotal::create(
            100.0,
            50.0,
            10.0,
            80.0,
            20.0,
            200.0,
            30.0,
            40.0,
            5.0,
            0.0,
            15.0,
            8.0,
            12.0,
            2.0,
            500.0,
            100.0,
            50.0,
            60.0,
            70.0,
            5.0,
            10.0,
            20.0,
            3.0,
            4,
            true
        );

        $tagIcmsTotal->aplicarIpi();

        $this->assertSame(0.0, $tagIcmsTotal->vIPIDevol());
    }

    public function testAplicarIpiWithFinalidadeNfeNot4(): void
    {
        $tagIcmsTotal = TagIcmsTotal::create(
            100.0,
            50.0,
            10.0,
            80.0,
            20.0,
            200.0,
            30.0,
            40.0,
            5.0,
            0.0,
            15.0,
            8.0,
            12.0,
            2.0,
            500.0,
            100.0,
            50.0,
            60.0,
            70.0,
            5.0,
            10.0,
            20.0,
            3.0,
            3,
            false
        );

        $tagIcmsTotal->aplicarIpi();

        $this->assertSame(0.0, $tagIcmsTotal->vIPIDevol());
    }

    public function testAplicarIpiWithFinalidadeNfe4AndNotDestacaIpi(): void
    {
        $tagIcmsTotal = TagIcmsTotal::create(
            100.0,
            50.0,
            10.0,
            80.0,
            20.0,
            200.0,
            30.0,
            40.0,
            5.0,
            0.0,
            15.0,
            8.0,
            12.0,
            2.0,
            500.0,
            100.0,
            50.0,
            60.0,
            70.0,
            5.0,
            10.0,
            20.0,
            3.0,
            4,
            false
        );

        $tagIcmsTotal->aplicarIpi();

        $this->assertSame(0.0, $tagIcmsTotal->vIPI());
    }

    public function testToArray(): void
    {
        $tagIcmsTotal = TagIcmsTotal::create(
            100.0,
            50.0,
            10.0,
            80.0,
            20.0,
            200.0,
            30.0,
            40.0,
            5.0,
            0.0,
            15.0,
            8.0,
            12.0,
            2.0,
            500.0,
            100.0,
            50.0,
            60.0,
            70.0,
            5.0,
            10.0,
            20.0,
            3.0,
            4,
            true
        );

        $expectedArray = [
            'vBC' => 100.0,
            'vICMS' => 50.0,
            'vICMSDeson' => 10.0,
            'vBCST' => 80.0,
            'vST' => 20.0,
            'vProd' => 200.0,
            'vFrete' => 30.0,
            'vSeg' => 40.0,
            'vDesc' => 5.0,
            'vII' => 0.0,
            'vIPI' => 15.0,
            'vPIS' => 8.0,
            'vCOFINS' => 12.0,
            'vOutro' => 2.0,
            'vNF' => 500.0,
            'vTotTrib' => 100.0,
            'vFCPUFDest' => 50.0,
            'vICMSUFDest' => 60.0,
            'vICMSUFRemet' => 70.0,
            'vFCP' => 5.0,
            'vFCPST' => 10.0,
            'vFCPSTRet' => 20.0,
            'vIPIDevol' => 0.0,
        ];

        $this->assertSame($expectedArray, $tagIcmsTotal->toArray());
    }
}