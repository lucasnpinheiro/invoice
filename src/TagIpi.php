<?php

declare(strict_types=1);

namespace NotaFiscal;

class TagIpi extends Base
{
    private function __construct(
        private int $item,
        private string $cEnq,
        private string $CST,
        private float $vIPI,
        private float $vBC,
        private float $pIPI,
        private bool $destacaIpi = false,
        private ?string $clEnq,
        private ?string $CNPJProd,
        private ?string $cSelo,
        private ?float $qSelo,
        private ?float $qUnid,
        private ?float $vUnid,
    ) {
        $this->aplicarIpi();
    }

    public static function create(
        int $item,
        string $cEnq,
        string $CST,
        float $vIPI,
        float $vBC,
        float $pIPI,
        bool $destacaIpi = false,
        ?string $clEnq,
        ?string $CNPJProd,
        ?string $cSelo,
        ?float $qSelo,
        ?float $qUnid,
        ?float $vUnid,
    ): self {
        return new self(
            $item,
            $cEnq,
            $CST,
            $vIPI,
            $vBC,
            $pIPI,
            $destacaIpi,
            $clEnq,
            $CNPJProd,
            $cSelo,
            $qSelo,
            $qUnid,
            $vUnid
        );
    }

    public function item(): int
    {
        return $this->item;
    }

    public function cEnq(): string
    {
        return $this->cEnq;
    }

    public function CST(): string
    {
        return $this->CST;
    }

    public function vIPI(): float
    {
        return $this->vIPI;
    }

    public function vBC(): float
    {
        return $this->vBC;
    }

    public function pIPI(): float
    {
        return $this->pIPI;
    }

    public function clEnq(): ?string
    {
        return $this->clEnq;
    }

    public function CNPJProd(): ?string
    {
        return $this->CNPJProd;
    }

    public function cSelo(): ?string
    {
        return $this->cSelo;
    }

    public function qSelo(): ?float
    {
        return $this->qSelo;
    }

    public function qUnid(): ?float
    {
        return $this->qUnid;
    }

    public function vUnid(): ?float
    {
        return $this->vUnid;
    }

    public function destacaIpi(): bool
    {
        return $this->destacaIpi;
    }

    public function aplicarIpi(): void
    {
        if ($this->destacaIpi()) {
            return;
        }

        $this->vIPI = 0;
        $this->vBC = 0;
        $this->pIPI = 0;
    }

    public function toArray(): array
    {
        return [
            'item' => $this->item(),
            'cEnq' => $this->cEnq(),
            'CST' => $this->CST(),
            'vIPI' => $this->vIPI(),
            'vBC' => $this->vBC(),
            'pIPI' => $this->pIPI(),
            'destacaIpi' => $this->destacaIpi(),
            'clEnq' => $this->clEnq(),
            'CNPJProd' => $this->CNPJProd(),
            'cSelo' => $this->cSelo(),
            'qSelo' => $this->qSelo(),
            'qUnid' => $this->qUnid(),
            'vUnid' => $this->vUnid(),
        ];
    }
}