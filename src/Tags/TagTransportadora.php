<?php

declare(strict_types=1);

namespace NotaFiscal\Tags;

class TagTransportadora extends Base
{
    private function __construct(
        private string $xNome,
        private ?string $IE = null,
        private ?string $xEnder = null,
        private ?string $xMun = null,
        private ?string $UF = null,
        private ?string $CPF_CNPJ = null
    ) {
    }

    public static function create(
        string $xNome,
        ?string $IE = null,
        ?string $xEnder = null,
        ?string $xMun = null,
        ?string $UF = null,
        ?string $CPF_CNPJ = null,
    ): self {
        return new self(
            $xNome,
            $IE,
            $xEnder,
            $xMun,
            $UF,
            $CPF_CNPJ
        );
    }

    public function xNome(): string
    {
        return $this->xNome;
    }

    public function IE(): ?string
    {
        return $this->IE;
    }

    public function xEnder(): ?string
    {
        return $this->xEnder;
    }

    public function xMun(): ?string
    {
        return $this->xMun;
    }

    public function UF(): ?string
    {
        return $this->UF;
    }

    public function CPF(): ?string
    {
        if (empty($this->CPF_CNPJ))
            return null;

        $cpf = preg_replace('/[^0-9]/', '', $this->CPF_CNPJ);
        return strlen($cpf) === 11 ? $cpf : null;
    }

    public function CNPJ(): ?string
    {
        if (empty($this->CPF_CNPJ))
            return null;

        $cnpj = preg_replace('/[^0-9]/', '', $this->CPF_CNPJ);
        return strlen($cnpj) === 14 ? $cnpj : null;
    }

    public function toArray(): array
    {
        return [
            'xNome' => $this->xNome(),
            'IE' => $this->IE(),
            'xEnder' => $this->xEnder(),
            'xMun' => $this->xMun(),
            'UF' => $this->UF(),
            'CPF' => $this->CPF(),
            'CNPJ' => $this->CNPJ(),
        ];
    }
}