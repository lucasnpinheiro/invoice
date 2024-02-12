<?php

declare(strict_types=1);

namespace NotaFiscal;

class TagIcmsSn extends Base
{
    private function __construct(
        private int $item,
        private string $orig,
        private string $CSOSN,
        private string $CST,
        private string $vBCST,
        private string $pICMSST,
        private string $vICMSST,
        private string $vBC,
        private string $pICMS,
        private string $vICMS,
        private string $pMVAST,
        private ?string $pCredSN = null,
        private ?string $vCredICMSSN = null,
        private ?string $modBCST = null,
        private ?string $pRedBCST = null,
        private ?string $vBCFCPST = null,
        private ?string $pFCPST = null,
        private ?string $vFCPST = null,
        private ?string $vBCSTRet = null,
        private ?string $pST = null,
        private ?string $vICMSSTRet = null,
        private ?string $vBCFCPSTRet = null,
        private ?string $pFCPSTRet = null,
        private ?string $vFCPSTRet = null,
        private ?string $modBC = null,
        private ?string $pRedBC = null,
        private ?string $pRedBCEfet = null,
        private ?string $vBCEfet = null,
        private ?string $pICMSEfet = null,
        private ?string $vICMSEfet = null,
        private ?string $vICMSSubstituto = null,
    ) {
    }

    public static function create(
        int $item,
        string $orig,
        string $CSOSN,
        string $CST,
        string $vBCST,
        string $pICMSST,
        string $vICMSST,
        string $vBC,
        string $pICMS,
        string $vICMS,
        string $pMVAST,
        ?string $pCredSN = null,
        ?string $vCredICMSSN = null,
        ?string $modBCST = null,
        ?string $pRedBCST = null,
        ?string $vBCFCPST = null,
        ?string $pFCPST = null,
        ?string $vFCPST = null,
        ?string $vBCSTRet = null,
        ?string $pST = null,
        ?string $vICMSSTRet = null,
        ?string $vBCFCPSTRet = null,
        ?string $pFCPSTRet = null,
        ?string $vFCPSTRet = null,
        ?string $modBC = null,
        ?string $pRedBC = null,
        ?string $pRedBCEfet = null,
        ?string $vBCEfet = null,
        ?string $pICMSEfet = null,
        ?string $vICMSEfet = null,
        ?string $vICMSSubstituto = null,
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
    public function orig(): string
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
    public function vBCST(): string
    {
        return $this->vBCST;
    }
    public function pICMSST(): string
    {
        return $this->pICMSST;
    }
    public function vICMSST(): string
    {
        return $this->vICMSST;
    }
    public function vBC(): string
    {
        return $this->vBC;
    }
    public function pICMS(): string
    {
        return $this->pICMS;
    }
    public function vICMS(): string
    {
        return $this->vICMS;
    }
    public function pMVAST(): string
    {
        return $this->pMVAST;
    }
    public function pCredSN(): ?string
    {
        return $this->pCredSN;
    }
    public function vCredICMSSN(): ?string
    {
        return $this->vCredICMSSN;
    }
    public function modBCST(): ?string
    {
        return $this->modBCST;
    }
    public function pRedBCST(): ?string
    {
        return $this->pRedBCST;
    }
    public function vBCFCPST(): ?string
    {
        return $this->vBCFCPST;
    }
    public function pFCPST(): ?string
    {
        return $this->pFCPST;
    }
    public function vFCPST(): ?string
    {
        return $this->vFCPST;
    }
    public function vBCSTRet(): ?string
    {
        return $this->vBCSTRet;
    }
    public function pST(): ?string
    {
        return $this->pST;
    }
    public function vICMSSTRet(): ?string
    {
        return $this->vICMSSTRet;
    }
    public function vBCFCPSTRet(): ?string
    {
        return $this->vBCFCPSTRet;
    }
    public function pFCPSTRet(): ?string
    {
        return $this->pFCPSTRet;
    }
    public function vFCPSTRet(): ?string
    {
        return $this->vFCPSTRet;
    }
    public function modBC(): ?string
    {
        return $this->modBC;
    }
    public function pRedBC(): ?string
    {
        return $this->pRedBC;
    }
    public function pRedBCEfet(): ?string
    {
        return $this->pRedBCEfet;
    }
    public function vBCEfet(): ?string
    {
        return $this->vBCEfet;
    }
    public function pICMSEfet(): ?string
    {
        return $this->pICMSEfet;
    }
    public function vICMSEfet(): ?string
    {
        return $this->vICMSEfet;
    }
    public function vICMSSubstituto(): ?string
    {
        return $this->vICMSSubstituto;
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