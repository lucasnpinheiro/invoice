<?php

declare(strict_types=1);

namespace Lucasnpinheiro\NotaFiscal\Tags;

use InvalidArgumentException;

class TagDest extends Base
{
    private function __construct(
        private string $xNome,
        private string $indIEDest,
        private ?string $IE = null,
        private ?string $CPF_CNPJ = null,
        private ?string $ISUF,
        private ?string $IM = null,
        private ?string $email = null,
        private ?string $idEstrangeiro = null,
    ) {
        $CPF_CNPJ = preg_replace('/\D/', '', $CPF_CNPJ);

        if (strlen($CPF_CNPJ) !== 11 && strlen($CPF_CNPJ) !== 14) {
            throw new InvalidArgumentException('CPF_CNPJ inválido');
        }
    }

    public static function create(
        string $xNome,
        string $indIEDest,
        ?string $IE,
        ?string $CPF_CNPJ,
        ?string $ISUF,
        ?string $IM,
        ?string $email,
        ?string $idEstrangeiro,
    ): self {
        return new self(
            $xNome,
            $indIEDest,
            $IE,
            $CPF_CNPJ,
            $ISUF,
            $IM,
            $email,
            $idEstrangeiro,
        );
    }

    public function toArray(): array
    {
        return [
            'xNome' => $this->xNome(),
            'indIEDest' => $this->indIEDest(),
            'IE' => $this->IE(),
            'CPF_CNPJ' => $this->CPF_CNPJ(),
            'ISUF' => $this->ISUF(),
            'IM' => $this->IM(),
            'email' => $this->email(),
            'idEstrangeiro' => $this->idEstrangeiro(),
        ];
    }

    public function xNome(): string
    {
        return $this->xNome;
    }

    public function indIEDest(): string
    {
        return $this->indIEDest;
    }

    public function IE(): ?string
    {
        return $this->IE;
    }

    public function CPF_CNPJ(): ?string
    {
        return $this->CPF_CNPJ;
    }

    public function isCpf(): bool
    {
        return strlen($this->CPF_CNPJ) === 11;
    }

    public function isCnpj(): bool
    {
        return strlen($this->CPF_CNPJ) === 14;
    }

    public function ISUF(): ?string
    {
        return $this->ISUF;
    }

    public function IM(): ?string
    {
        return $this->IM;
    }

    public function email(): ?string
    {
        return $this->email;
    }

    public function idEstrangeiro(): ?string
    {
        return $this->idEstrangeiro;
    }
}