<?php

declare(strict_types=1);

namespace NotaFiscal\Tags;

class TagDetPag extends Base
{
    private function __construct(
        private string $tPag,
        private ?int $indPag,
        private ?float $tBand,
        private ?float $cAut,
        private ?string $CNPJ,
        private ?float $vPag,
        private ?int $tpIntegra,
    ) {
    }

    public static function create(
        string $tPag,
        ?int $indPag,
        ?float $tBand,
        ?float $cAut,
        ?string $CNPJ,
        ?float $vPag,
        ?int $tpIntegra,
    ): self {
        return new self(
            $tPag,
            $indPag,
            $tBand,
            $cAut,
            $CNPJ,
            $vPag,
            $tpIntegra
        );
    }

    public function tPag(): string
    {
        return $this->tPag;
    }

    public function indPag(): ?int
    {
        return $this->indPag;
    }

    public function tBand(): ?float
    {
        return $this->tBand;
    }

    public function cAut(): ?float
    {
        return $this->cAut;
    }

    public function CNPJ(): ?string
    {
        return $this->CNPJ;
    }

    public function vPag(): ?float
    {
        return $this->vPag;
    }

    public function tpIntegra(): ?int
    {
        return $this->tpIntegra;
    }

    public function toArray(): array
    {
        return [
            'tPag' => $this->tPag(),
            'indPag' => $this->indPag(),
            'tBand' => $this->tBand(),
            'cAut' => $this->cAut(),
            'CNPJ' => $this->CNPJ(),
            'vPag' => $this->vPag(),
            'tpIntegra' => $this->tpIntegra(),
        ];
    }

}