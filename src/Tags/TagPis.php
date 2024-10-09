<?php

declare(strict_types=1);

namespace Lucasnpinheiro\NotaFiscal\Tags;

class TagPis extends Base
{
    private function __construct(
        private int $item,
        private string $CST,
        private float $vBC,
        private float $pPIS,
        private float $vPIS,
        private ?float $qBCProd = null,
        private ?string $vAliqProd = null,
    ) {
    }

    public static function create(
        int $item,
        string $CST,
        float $vBC,
        float $pPIS,
        float $vPIS,
        ?float $qBCProd = null,
        ?string $vAliqProd = null,
    ): self {
        return new self(
            $item,
            $CST,
            $vBC,
            $pPIS,
            $vPIS,
            $qBCProd,
            $vAliqProd,
        );
    }

    public function toArray(): array
    {
        return [
            'item' => $this->item(),
            'CST' => $this->CST(),
            'vBC' => $this->vBC(),
            'pPIS' => $this->pPIS(),
            'vPIS' => $this->vPIS(),
            'qBCProd' => $this->qBCProd(),
            'vAliqProd' => $this->vAliqProd(),
        ];
    }

    public function item(): int
    {
        return $this->item;
    }

    public function CST(): string
    {
        return $this->CST;
    }

    public function vBC(): float
    {
        return $this->vBC;
    }

    public function pPIS(): float
    {
        return $this->pPIS;
    }

    public function vPIS(): float
    {
        return $this->vPIS;
    }

    public function qBCProd(): ?float
    {
        return $this->qBCProd;
    }

    public function vAliqProd(): ?string
    {
        return $this->vAliqProd;
    }
}