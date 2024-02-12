<?php

declare(strict_types=1);

namespace NotaFiscal\Tags;

class TagEmit extends Base
{
    private function __construct(
        private string $xNome,
        private string $xFant,
        private string $IE,
        private string $CRT,
        private ?string $CNPJ = null,
        private ?string $IEST = null,
        private ?string $IM = null,
        private ?string $CNAE = null,
        private ?string $CPF = null
    ) {
    }

    public static function create(
        string $xNome,
        string $xFant,
        string $IE,
        string $CRT,
        ?string $CNPJ,
        ?string $IEST,
        ?string $IM,
        ?string $CNAE,
        ?string $CPF
    ): self {
        return new self(
            $xNome,
            $xFant,
            $IE,
            $CRT,
            $CNPJ,
            $IEST,
            $IM,
            $CNAE,
            $CPF
        );
    }

    public function xNome(): string
    {
        return $this->xNome;
    }

    public function xFant(): string
    {
        return $this->xFant;
    }

    public function IE(): string
    {
        return $this->IE;
    }

    public function CRT(): string
    {
        return $this->CRT;
    }

    public function CNPJ(): ?string
    {
        return $this->CNPJ;
    }

    public function IEST(): ?string
    {
        return $this->IEST;
    }

    public function IM(): ?string
    {
        return $this->IM;
    }

    public function CNAE(): ?string
    {
        return $this->CNAE;
    }

    public function CPF(): ?string
    {
        return $this->CPF;
    }

    public function toArray(): array
    {
        return [
            'xNome' => $this->xNome(),
            'xFant' => $this->xFant(),
            'IE' => $this->IE(),
            'CRT' => $this->CRT(),
            'CNPJ' => $this->CNPJ(),
            'IEST' => $this->IEST(),
            'IM' => $this->IM(),
            'CNAE' => $this->CNAE(),
            'CPF' => $this->CPF()
        ];
    }
}