<?php

declare(strict_types=1);

namespace Lucasnpinheiro\NotaFiscal\Tags;

class TagIcms extends Base
{
    private function __construct(
        private int $item,
        private string $orig,
        private string $CST,
        private string $modBC,
        private string $vBC,
        private string $pICMS,
        private string $vICMS,
        private string $pMVAST,
        private string $vBCST,
        private string $pICMSST,
        private string $vICMSST,
        private ?string $pFCP = null,
        private ?string $vFCP = null,
        private ?string $vBCFCP = null,
        private ?string $modBCST = null,
        private ?string $pRedBCST = null,
        private ?string $vBCFCPST = null,
        private ?string $pFCPST = null,
        private ?string $vFCPST = null,
        private ?string $vICMSDeson = null,
        private ?string $motDesICMS = null,
        private ?string $pRedBC = null,
        private ?string $vICMSOp = null,
        private ?string $pDif = null,
        private ?string $vICMSDif = null,
        private ?string $vBCSTRet = null,
        private ?string $pST = null,
        private ?string $vICMSSTRet = null,
        private ?string $vBCFCPSTRet = null,
        private ?string $pFCPSTRet = null,
        private ?string $vFCPSTRet = null,
        private ?string $pRedBCEfet = null,
        private ?string $vBCEfet = null,
        private ?string $pICMSEfet = null,
        private ?string $vICMSEfet = null,
        private ?string $vICMSSubstituto = null,
        private ?string $vICMSSTDeson = null,
        private ?string $motDesICMSST = null,
        private ?string $pFCPDif = null,
        private ?string $vFCPDif = null,
        private ?string $vFCPEfet = null,
    ) {
    }

    public static function create(
        int $item,
        string $orig,
        string $CST,
        string $modBC,
        string $vBC,
        string $pICMS,
        string $vICMS,
        string $pMVAST,
        string $vBCST,
        string $pICMSST,
        string $vICMSST,
        ?string $pFCP = null,
        ?string $vFCP = null,
        ?string $vBCFCP = null,
        ?string $modBCST = null,
        ?string $pRedBCST = null,
        ?string $vBCFCPST = null,
        ?string $pFCPST = null,
        ?string $vFCPST = null,
        ?string $vICMSDeson = null,
        ?string $motDesICMS = null,
        ?string $pRedBC = null,
        ?string $vICMSOp = null,
        ?string $pDif = null,
        ?string $vICMSDif = null,
        ?string $vBCSTRet = null,
        ?string $pST = null,
        ?string $vICMSSTRet = null,
        ?string $vBCFCPSTRet = null,
        ?string $pFCPSTRet = null,
        ?string $vFCPSTRet = null,
        ?string $pRedBCEfet = null,
        ?string $vBCEfet = null,
        ?string $pICMSEfet = null,
        ?string $vICMSEfet = null,
        ?string $vICMSSubstituto = null,
        ?string $vICMSSTDeson = null,
        ?string $motDesICMSST = null,
        ?string $pFCPDif = null,
        ?string $vFCPDif = null,
        ?string $vFCPEfet = null,
    ): self {
        return new self(
            $item,
            $orig,
            $CST,
            $modBC,
            $vBC,
            $pICMS,
            $vICMS,
            $pMVAST,
            $vBCST,
            $pICMSST,
            $vICMSST,
            $pFCP,
            $vFCP,
            $vBCFCP,
            $modBCST,
            $pRedBCST,
            $vBCFCPST,
            $pFCPST,
            $vFCPST,
            $vICMSDeson,
            $motDesICMS,
            $pRedBC,
            $vICMSOp,
            $pDif,
            $vICMSDif,
            $vBCSTRet,
            $pST,
            $vICMSSTRet,
            $vBCFCPSTRet,
            $pFCPSTRet,
            $vFCPSTRet,
            $pRedBCEfet,
            $vBCEfet,
            $pICMSEfet,
            $vICMSEfet,
            $vICMSSubstituto,
            $vICMSSTDeson,
            $motDesICMSST,
            $pFCPDif,
            $vFCPDif,
            $vFCPEfet
        );
    }

    public function toArray(): array
    {
        return [
            'item' => $this->item(),
            'orig' => $this->orig(),
            'CST' => $this->CST(),
            'modBC' => $this->modBC(),
            'vBC' => $this->vBC(),
            'pICMS' => $this->pICMS(),
            'vICMS' => $this->vICMS(),
            'pMVAST' => $this->pMVAST(),
            'vBCST' => $this->vBCST(),
            'pICMSST' => $this->pICMSST(),
            'vICMSST' => $this->vICMSST(),
            'pFCP' => $this->pFCP(),
            'vFCP' => $this->vFCP(),
            'vBCFCP' => $this->vBCFCP(),
            'modBCST' => $this->modBCST(),
            'pRedBCST' => $this->pRedBCST(),
            'vBCFCPST' => $this->vBCFCPST(),
            'pFCPST' => $this->pFCPST(),
            'vFCPST' => $this->vFCPST(),
            'vICMSDeson' => $this->vICMSDeson(),
            'motDesICMS' => $this->motDesICMS(),
            'pRedBC' => $this->pRedBC(),
            'vICMSOp' => $this->vICMSOp(),
            'pDif' => $this->pDif(),
            'vICMSDif' => $this->vICMSDif(),
            'vBCSTRet' => $this->vBCSTRet(),
            'pST' => $this->pST(),
            'vICMSSTRet' => $this->vICMSSTRet(),
            'vBCFCPSTRet' => $this->vBCFCPSTRet(),
            'pFCPSTRet' => $this->pFCPSTRet(),
            'vFCPSTRet' => $this->vFCPSTRet(),
            'pRedBCEfet' => $this->pRedBCEfet(),
            'vBCEfet' => $this->vBCEfet(),
            'pICMSEfet' => $this->pICMSEfet(),
            'vICMSEfet' => $this->vICMSEfet(),
            'vICMSSubstituto' => $this->vICMSSubstituto(),
            'vICMSSTDeson' => $this->vICMSSTDeson(),
            'motDesICMSST' => $this->motDesICMSST(),
            'pFCPDif' => $this->pFCPDif(),
            'vFCPDif' => $this->vFCPDif(),
            'vFCPEfet' => $this->vFCPEfet(),
        ];
    }

    public function item(): int
    {
        return $this->item;
    }

    public function orig(): string
    {
        return $this->orig;
    }

    public function CST(): string
    {
        return $this->CST;
    }

    public function modBC(): string
    {
        return $this->modBC;
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

    public function pFCP(): ?string
    {
        return $this->pFCP;
    }

    public function vFCP(): ?string
    {
        return $this->vFCP;
    }

    public function vBCFCP(): ?string
    {
        return $this->vBCFCP;
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

    public function vICMSDeson(): ?string
    {
        return $this->vICMSDeson;
    }

    public function motDesICMS(): ?string
    {
        return $this->motDesICMS;
    }

    public function pRedBC(): ?string
    {
        return $this->pRedBC;
    }

    public function vICMSOp(): ?string
    {
        return $this->vICMSOp;
    }

    public function pDif(): ?string
    {
        return $this->pDif;
    }

    public function vICMSDif(): ?string
    {
        return $this->vICMSDif;
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

    public function vICMSSTDeson(): ?string
    {
        return $this->vICMSSTDeson;
    }

    public function motDesICMSST(): ?string
    {
        return $this->motDesICMSST;
    }

    public function pFCPDif(): ?string
    {
        return $this->pFCPDif;
    }

    public function vFCPDif(): ?string
    {
        return $this->vFCPDif;
    }

    public function vFCPEfet(): ?string
    {
        return $this->vFCPEfet;
    }
}