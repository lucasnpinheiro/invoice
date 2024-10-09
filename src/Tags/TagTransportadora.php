<?php

declare(strict_types=1);

namespace NotaFiscal\Tags;

use InvalidArgumentException;

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
        $cpfCnpj = preg_replace('/[^0-9]/', '', $this->CPF_CNPJ);

        if (!empty($cpfCnpj) && (strlen($cpfCnpj) !== 11 && strlen($cpfCnpj) !== 14)) {
            throw new InvalidArgumentException('CPF/CNPJ inválido');
        }
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

    public function toArray(): array
    {
        return [
            'xNome' => $this->xNome(),
            'IE' => $this->IE(),
            'xEnder' => $this->xEnder(),
            'xMun' => $this->xMun(),
            'UF' => $this->UF(),
            'CPF_CNPJ' => $this->CPF_CNPJ(),
        ];
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

    public function CPF_CNPJ(): ?string
    {
        return empty($this->CPF_CNPJ) ? null : $this->CPF_CNPJ;
    }

    public function isCpf(): bool
    {
        return strlen($this->CPF_CNPJ) === 11;
    }
    public function isCnpj(): bool
    {
        return strlen($this->CPF_CNPJ) === 14;
    }
}