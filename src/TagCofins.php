<?php

declare(strict_types=1);

namespace NotaFiscal;

class TagCofins extends Base
{
    private function __construct(
        private int $item,
        private string $CST,
        private float $vCOFINS,
        private float $vBC,
        private float $pCOFINS,
        private ?float $qBCProd = null,
        private ?float $vAliqProd = null,
    ) {
    }

    public static function create(
        int $item,
        string $CST,
        float $vCOFINS,
        float $vBC,
        float $pCOFINS,
        ?float $qBCProd = null,
        ?float $vAliqProd = null,
    ): self {
        return new self(
            $item,
            $CST,
            $vCOFINS,
            $vBC,
            $pCOFINS,
            $qBCProd,
            $vAliqProd,
        );
    }

    public function item(): int
    {
        return $this->item;
    }

    public function CST(): string
    {
        return $this->CST;
    }

    public function vCOFINS(): float
    {
        return $this->vCOFINS;
    }

    public function vBC(): float
    {
        return $this->vBC;
    }

    public function pCOFINS(): float
    {
        return $this->pCOFINS;
    }

    public function qBCProd(): ?float
    {
        return $this->qBCProd;
    }

    public function vAliqProd(): ?float
    {
        return $this->vAliqProd;
    }


    public function toArray(): array
    {
        return [
            'item' => $this->item(),
            'CST' => $this->CST(),
            'vCOFINS' => $this->vCOFINS(),
            'vBC' => $this->vBC(),
            'pCOFINS' => $this->pCOFINS(),
            'qBCProd' => $this->qBCProd(),
            'vAliqProd' => $this->vAliqProd(),
        ];
    }
}