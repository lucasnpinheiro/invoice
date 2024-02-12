<?php

declare(strict_types=1);

namespace NotaFiscal\Tags;

class TagIcmsTotal extends Base
{
    private function __construct(
        private float $vBC = 0,
        private float $vICMS = 0,
        private float $vICMSDeson = 0,
        private float $vBCST = 0,
        private float $vST = 0,
        private float $vProd = 0,
        private float $vFrete = 0,
        private float $vSeg = 0,
        private float $vDesc = 0,
        private float $vII = 0,
        private float $vIPI = 0,
        private float $vPIS = 0,
        private float $vCOFINS = 0,
        private float $vOutro = 0,
        private float $vNF = 0,
        private float $vTotTrib = 0,
        private float $vFCPUFDest = 0,
        private float $vICMSUFDest = 0,
        private float $vICMSUFRemet = 0,
        private float $vFCP = 0,
        private float $vFCPST = 0,
        private float $vFCPSTRet = 0,
        private float $vIPIDevol = 0,
        private int $finalidadeNfe = 0,
        private bool $destacaIpi = false,
    ) {
        $this->aplicarIpi();
    }

    public static function create(
        float $vBC = 0,
        float $vICMS = 0,
        float $vICMSDeson = 0,
        float $vBCST = 0,
        float $vST = 0,
        float $vProd = 0,
        float $vFrete = 0,
        float $vSeg = 0,
        float $vDesc = 0,
        float $vII = 0,
        float $vIPI = 0,
        float $vPIS = 0,
        float $vCOFINS = 0,
        float $vOutro = 0,
        float $vNF = 0,
        float $vTotTrib = 0,
        float $vFCPUFDest = 0,
        float $vICMSUFDest = 0,
        float $vICMSUFRemet = 0,
        float $vFCP = 0,
        float $vFCPST = 0,
        float $vFCPSTRet = 0,
        float $vIPIDevol = 0,
        int $finalidadeNfe = 0,
        bool $destacaIpi = false,
    ): self {
        return new self(
            $vBC,
            $vICMS,
            $vICMSDeson,
            $vBCST,
            $vST,
            $vProd,
            $vFrete,
            $vSeg,
            $vDesc,
            $vII,
            $vIPI,
            $vPIS,
            $vCOFINS,
            $vOutro,
            $vNF,
            $vTotTrib,
            $vFCPUFDest,
            $vICMSUFDest,
            $vICMSUFRemet,
            $vFCP,
            $vFCPST,
            $vFCPSTRet,
            $vIPIDevol,
            $finalidadeNfe,
            $destacaIpi
        );
    }

    public function vBC(): float
    {
        return $this->vBC;
    }

    public function vICMS(): float
    {
        return $this->vICMS;
    }

    public function vICMSDeson(): float
    {
        return $this->vICMSDeson;
    }

    public function vBCST(): float
    {
        return $this->vBCST;
    }

    public function vST(): float
    {
        return $this->vST;
    }

    public function vProd(): float
    {
        return $this->vProd;
    }

    public function vFrete(): float
    {
        return $this->vFrete;
    }

    public function vSeg(): float
    {
        return $this->vSeg;
    }

    public function vDesc(): float
    {
        return $this->vDesc;
    }

    public function vII(): float
    {
        return $this->vII;
    }

    public function vIPI(): float
    {
        return $this->vIPI;
    }

    public function vPIS(): float
    {
        return $this->vPIS;
    }

    public function vCOFINS(): float
    {
        return $this->vCOFINS;
    }

    public function vOutro(): float
    {
        return $this->vOutro;
    }

    public function vNF(): float
    {
        return $this->vNF;
    }

    public function vTotTrib(): float
    {
        return $this->vTotTrib;
    }

    public function vFCPUFDest(): float
    {
        return $this->vFCPUFDest;
    }

    public function vICMSUFDest(): float
    {
        return $this->vICMSUFDest;
    }

    public function vICMSUFRemet(): float
    {
        return $this->vICMSUFRemet;
    }

    public function vFCP(): float
    {
        return $this->vFCP;
    }

    public function vFCPST(): float
    {
        return $this->vFCPST;
    }

    public function vFCPSTRet(): float
    {
        return $this->vFCPSTRet;
    }

    public function vIPIDevol(): float
    {
        return $this->vIPIDevol;
    }

    public function finalidadeNfe(): int
    {
        return $this->finalidadeNfe;
    }

    public function destacaIpi(): bool
    {
        return $this->destacaIpi;
    }

    public function aplicarIpi(): void
    {
        if ($this->destacaIpi()) {
            $this->vIPIDevol = 0;
            return;
        }

        if ($this->finalidadeNfe() !== 4) {
            $this->vIPIDevol = 0;
            return;
        }

        $this->vIPI = 0;
    }

    public function toArray(): array
    {
        return [
            'vBC' => $this->vBC(),
            'vICMS' => $this->vICMS(),
            'vICMSDeson' => $this->vICMSDeson(),
            'vBCST' => $this->vBCST(),
            'vST' => $this->vST(),
            'vProd' => $this->vProd(),
            'vFrete' => $this->vFrete(),
            'vSeg' => $this->vSeg(),
            'vDesc' => $this->vDesc(),
            'vII' => $this->vII(),
            'vIPI' => $this->vIPI(),
            'vPIS' => $this->vPIS(),
            'vCOFINS' => $this->vCOFINS(),
            'vOutro' => $this->vOutro(),
            'vNF' => $this->vNF(),
            'vTotTrib' => $this->vTotTrib(),
            'vFCPUFDest' => $this->vFCPUFDest(),
            'vICMSUFDest' => $this->vICMSUFDest(),
            'vICMSUFRemet' => $this->vICMSUFRemet(),
            'vFCP' => $this->vFCP(),
            'vFCPST' => $this->vFCPST(),
            'vFCPSTRet' => $this->vFCPSTRet(),
            'vIPIDevol' => $this->vIPIDevol(),
        ];
    }
}