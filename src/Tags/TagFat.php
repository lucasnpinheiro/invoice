<?php

declare(strict_types=1);

namespace NotaFiscal\Tags;

class TagFat extends Base
{
    private function __construct(
        private string $nFat,
        private float $vOrig,
        private float $vLiq,
        private ?float $vDesc = null,
    ) {
    }

    public static function create(
        string $nFat,
        float $vOrig,
        float $vLiq,
        ?float $vDesc = null,
    ): self {
        return new self(
            $nFat,
            $vOrig,
            $vLiq,
            $vDesc
        );
    }

    public function nFat(): string
    {
        return $this->nFat;
    }

    public function vOrig(): float
    {
        return $this->vOrig;
    }

    public function vLiq(): float
    {
        return $this->vLiq;
    }

    public function vDesc(): ?float
    {
        return $this->vDesc;
    }

    public function toArray(): array
    {
        return [
            'nFat' => $this->nFat(),
            'vOrig' => $this->vOrig(),
            'vLiq' => $this->vLiq(),
            'vDesc' => $this->vDesc(),
        ];
    }
}