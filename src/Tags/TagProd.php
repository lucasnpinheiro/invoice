<?php

declare(strict_types=1);

namespace NotaFiscal\Tags;

class TagProd extends Base
{
    private function __construct(
        private int $item,
        private string $cEAN = 'SEM GTIN',
        private string $cEANTrib = 'SEM GTIN',
        private string $cProd,
        private string $xProd,
        private string $NCM,
        private string $CFOP,
        private string $uCom,
        private string $qCom,
        private string $vUnCom,
        private string $vProd,
        private string $uTrib,
        private string $qTrib,
        private string $vUnTrib,
        private string $nItemPed,
        private string $indTot,
        private string $vFrete,
        private string $vDesc,
        private string $vOutro,
        private ?string $vSeg = null,
        private ?string $cBarra = null,
        private ?string $cBenef = null,
        private ?string $EXTIPI = null,
        private ?string $cBarraTrib = null,
        private ?string $xPed = null
    ) {
    }

    public static function create(
        int $item,
        string $cEAN = 'SEM GTIN',
        string $cEANTrib = 'SEM GTIN',
        string $cProd,
        string $xProd,
        string $NCM,
        string $CFOP,
        string $uCom,
        string $qCom,
        string $vUnCom,
        string $vProd,
        string $uTrib,
        string $qTrib,
        string $vUnTrib,
        string $nItemPed,
        string $indTot,
        string $vFrete,
        string $vDesc,
        string $vOutro,
        ?string $vSeg = null,
        ?string $cBarra = null,
        ?string $cBenef = null,
        ?string $EXTIPI = null,
        ?string $cBarraTrib = null,
        ?string $xPed = null
    ): self {
        return new self(
            $item,
            $cEAN,
            $cEANTrib,
            $cProd,
            $xProd,
            $NCM,
            $CFOP,
            $uCom,
            $qCom,
            $vUnCom,
            $vProd,
            $uTrib,
            $qTrib,
            $vUnTrib,
            $nItemPed,
            $indTot,
            $vFrete,
            $vDesc,
            $vOutro,
            $vSeg,
            $cBarra,
            $cBenef,
            $EXTIPI,
            $cBarraTrib,
            $xPed
        );
    }

    public function toArray(): array
    {
        return [
            'item' => $this->item(),
            'cEAN' => $this->cEAN(),
            'cEANTrib' => $this->cEANTrib(),
            'cProd' => $this->cProd(),
            'xProd' => $this->xProd(),
            'NCM' => $this->NCM(),
            'CFOP' => $this->CFOP(),
            'uCom' => $this->uCom(),
            'qCom' => $this->qCom(),
            'vUnCom' => $this->vUnCom(),
            'vProd' => $this->vProd(),
            'uTrib' => $this->uTrib(),
            'qTrib' => $this->qTrib(),
            'vUnTrib' => $this->vUnTrib(),
            'nItemPed' => $this->nItemPed(),
            'indTot' => $this->indTot(),
            'vFrete' => $this->vFrete(),
            'vDesc' => $this->vDesc(),
            'vOutro' => $this->vOutro(),
            'vSeg' => $this->vSeg(),
            'cBarra' => $this->cBarra(),
            'cBenef' => $this->cBenef(),
            'EXTIPI' => $this->EXTIPI(),
            'cBarraTrib' => $this->cBarraTrib(),
            'xPed' => $this->xPed()
        ];
    }

    public function item(): int
    {
        return $this->item;
    }

    public function cEAN(): string
    {
        return $this->cEAN;
    }

    public function cEANTrib(): string
    {
        return $this->cEANTrib;
    }

    public function cProd(): string
    {
        return $this->cProd;
    }

    public function xProd(): string
    {
        return $this->xProd;
    }

    public function NCM(): string
    {
        return $this->NCM;
    }

    public function CFOP(): string
    {
        return $this->CFOP;
    }

    public function uCom(): string
    {
        return $this->uCom;
    }

    public function qCom(): string
    {
        return $this->qCom;
    }

    public function vUnCom(): string
    {
        return $this->vUnCom;
    }

    public function vProd(): string
    {
        return $this->vProd;
    }

    public function uTrib(): string
    {
        return $this->uTrib;
    }

    public function qTrib(): string
    {
        return $this->qTrib;
    }

    public function vUnTrib(): string
    {
        return $this->vUnTrib;
    }

    public function nItemPed(): string
    {
        return $this->nItemPed;
    }

    public function indTot(): string
    {
        return $this->indTot;
    }

    public function vFrete(): string
    {
        return $this->vFrete;
    }

    public function vDesc(): string
    {
        return $this->vDesc;
    }

    public function vOutro(): string
    {
        return $this->vOutro;
    }

    public function vSeg(): ?string
    {
        return $this->vSeg;
    }

    public function cBarra(): ?string
    {
        return $this->cBarra;
    }

    public function cBenef(): ?string
    {
        return $this->cBenef;
    }

    public function EXTIPI(): ?string
    {
        return $this->EXTIPI;
    }

    public function cBarraTrib(): ?string
    {
        return $this->cBarraTrib;
    }

    public function xPed(): ?string
    {
        return $this->xPed;
    }
}