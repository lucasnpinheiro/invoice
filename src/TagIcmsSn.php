<?php

declare(strict_types=1);

namespace NotaFiscal;

class TagIcmsSn extends Base
{
    private function __construct(
        private int $item,
        private int $orig,
        private string $CSOSN,
        private string $CST,
        private float $vBCST,
        private float $pICMSST,
        private float $vICMSST,
        private float $vBC,
        private float $pICMS,
        private float $vICMS,
        private float $pMVAST,
        private ?float $pCredSN = null,
        private ?float $vCredICMSSN = null,
        private ?int $modBCST = null,
        private ?float $pRedBCST = null,
        private ?float $vBCFCPST = null,
        private ?float $pFCPST = null,
        private ?float $vFCPST = null,
        private ?float $vBCSTRet = null,
        private ?float $pST = null,
        private ?float $vICMSSTRet = null,
        private ?float $vBCFCPSTRet = null,
        private ?float $pFCPSTRet = null,
        private ?float $vFCPSTRet = null,
        private ?int $modBC = null,
        private ?float $pRedBC = null,
        private ?float $pRedBCEfet = null,
        private ?float $vBCEfet = null,
        private ?float $pICMSEfet = null,
        private ?float $vICMSEfet = null,
        private ?float $vICMSSubstituto = null,
    ) {
    }

    public static function create(
        int $item,
        int $orig,
        string $CSOSN,
        string $CST,
        float $vBCST,
        float $pICMSST,
        float $vICMSST,
        float $vBC,
        float $pICMS,
        float $vICMS,
        float $pMVAST,
        ?float $pCredSN = null,
        ?float $vCredICMSSN = null,
        ?int $modBCST = null,
        ?float $pRedBCST = null,
        ?float $vBCFCPST = null,
        ?float $pFCPST = null,
        ?float $vFCPST = null,
        ?float $vBCSTRet = null,
        ?float $pST = null,
        ?float $vICMSSTRet = null,
        ?float $vBCFCPSTRet = null,
        ?float $pFCPSTRet = null,
        ?float $vFCPSTRet = null,
        ?int $modBC = null,
        ?float $pRedBC = null,
        ?float $pRedBCEfet = null,
        ?float $vBCEfet = null,
        ?float $pICMSEfet = null,
        ?float $vICMSEfet = null,
        ?float $vICMSSubstituto = null,
    ): self {
        return new self(
            $item,
            $orig,
            $CSOSN,
            $CST,
            $vBCST,
            $pICMSST,
            $vICMSST,
            $vBC,
            $pICMS,
            $vICMS,
            $pMVAST,
            $pCredSN,
            $vCredICMSSN,
            $modBCST,
            $pRedBCST,
            $vBCFCPST,
            $pFCPST,
            $vFCPST,
            $vBCSTRet,
            $pST,
            $vICMSSTRet,
            $vBCFCPSTRet,
            $pFCPSTRet,
            $vFCPSTRet,
            $modBC,
            $pRedBC,
            $pRedBCEfet,
            $vBCEfet,
            $pICMSEfet,
            $vICMSEfet,
            $vICMSSubstituto
        );
    }

    public function item(): int
    {
        return $this->item;
    }
    public function orig(): int
    {
        return $this->orig;
    }
    public function CSOSN(): string
    {
        return $this->CSOSN;
    }
    public function CST(): string
    {
        return $this->CST;
    }
    public function vBCST(): float
    {
        return $this->vBCST;
    }
    public function pICMSST(): float
    {
        return $this->pICMSST;
    }
    public function vICMSST(): float
    {
        return $this->vICMSST;
    }
    public function vBC(): float
    {
        return $this->vBC;
    }
    public function pICMS(): float
    {
        return $this->pICMS;
    }
    public function vICMS(): float
    {
        return $this->vICMS;
    }
    public function pMVAST(): float
    {
        return $this->pMVAST;
    }
    public function pCredSN(): ?float
    {
        return $this->pCredSN;
    }
    public function vCredICMSSN(): ?float
    {
        return $this->vCredICMSSN;
    }
    public function modBCST(): ?int
    {
        return $this->modBCST;
    }
    public function pRedBCST(): ?float
    {
        return $this->pRedBCST;
    }
    public function vBCFCPST(): ?float
    {
        return $this->vBCFCPST;
    }
    public function pFCPST(): ?float
    {
        return $this->pFCPST;
    }
    public function vFCPST(): ?float
    {
        return $this->vFCPST;
    }
    public function vBCSTRet(): ?float
    {
        return $this->vBCSTRet;
    }
    public function pST(): ?float
    {
        return $this->pST;
    }
    public function vICMSSTRet(): ?float
    {
        return $this->vICMSSTRet;
    }
    public function vBCFCPSTRet(): ?float
    {
        return $this->vBCFCPSTRet;
    }
    public function pFCPSTRet(): ?float
    {
        return $this->pFCPSTRet;
    }
    public function vFCPSTRet(): ?float
    {
        return $this->vFCPSTRet;
    }
    public function modBC(): ?int
    {
        return $this->modBC;
    }
    public function pRedBC(): ?float
    {
        return $this->pRedBC;
    }
    public function pRedBCEfet(): ?float
    {
        return $this->pRedBCEfet;
    }
    public function vBCEfet(): ?float
    {
        return $this->vBCEfet;
    }
    public function pICMSEfet(): ?float
    {
        return $this->pICMSEfet;
    }
    public function vICMSEfet(): ?float
    {
        return $this->vICMSEfet;
    }
    public function vICMSSubstituto(): ?float
    {
        return $this->vICMSSubstituto;
    }

    public function csosn900()
    {
        if ($this->CSOSN() != '900') {
            return;
        }

        $this->modBC = 3;
        $this->pICMSST = 0;
        $this->modBCST = 4;

        if (empty($this->vBCST())) {
            $this->vBCST = 0;
            $this->vICMSST = 0;
        }
    }

    public function csosn500()
    {
        if ($this->CSOSN() != '500') {
            return;
        }

        $this->orig = 0;
        $this->vBCSTRet = 0;
        $this->pST = 0;
        $this->vICMSSubstituto = 0;
        $this->vICMSSTRet = 0;
    }

    public function toArray(): array
    {
        return [
            'item' => $this->item(),
            'orig' => $this->orig(),
            'CSOSN' => $this->CSOSN(),
            'CST' => $this->CST(),
            'vBCST' => $this->vBCST(),
            'pICMSST' => $this->pICMSST(),
            'vICMSST' => $this->vICMSST(),
            'vBC' => $this->vBC(),
            'pICMS' => $this->pICMS(),
            'vICMS' => $this->vICMS(),
            'pMVAST' => $this->pMVAST(),
            'pCredSN' => $this->pCredSN(),
            'vCredICMSSN' => $this->vCredICMSSN(),
            'modBCST' => $this->modBCST(),
            'pRedBCST' => $this->pRedBCST(),
            'vBCFCPST' => $this->vBCFCPST(),
            'pFCPST' => $this->pFCPST(),
            'vFCPST' => $this->vFCPST(),
            'vBCSTRet' => $this->vBCSTRet(),
            'pST' => $this->pST(),
            'vICMSSTRet' => $this->vICMSSTRet(),
            'vBCFCPSTRet' => $this->vBCFCPSTRet(),
            'pFCPSTRet' => $this->pFCPSTRet(),
            'vFCPSTRet' => $this->vFCPSTRet(),
            'modBC' => $this->modBC(),
            'pRedBC' => $this->pRedBC(),
            'pRedBCEfet' => $this->pRedBCEfet(),
            'vBCEfet' => $this->vBCEfet(),
            'pICMSEfet' => $this->pICMSEfet(),
            'vICMSEfet' => $this->vICMSEfet(),
            'vICMSSubstituto' => $this->vICMSSubstituto(),
        ];
    }
}