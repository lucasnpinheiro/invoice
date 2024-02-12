<?php

declare(strict_types=1);

namespace NotaFiscal\Tags;

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
        private ?string $CPF = null,
        private ?string $CNPJ = null,
    ) {

        $CPF_CNPJ = preg_replace('/[^0-9]/', '', $CPF_CNPJ);

        if (strlen($CPF_CNPJ) === 11) {
            $this->CPF = $CPF_CNPJ;
        }

        if (strlen($CPF_CNPJ) === 14) {
            $this->CNPJ = $CPF_CNPJ;
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

    public function CPF(): ?string
    {
        return $this->CPF;
    }

    public function CNPJ(): ?string
    {
        return $this->CNPJ;
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

    public function toArray(): array
    {
        return [
            'xNome' => $this->xNome(),
            'indIEDest' => $this->indIEDest(),
            'IE' => $this->IE(),
            'CPF' => $this->CPF(),
            'CNPJ' => $this->CNPJ(),
            'ISUF' => $this->ISUF(),
            'IM' => $this->IM(),
            'email' => $this->email(),
            'idEstrangeiro' => $this->idEstrangeiro(),
        ];
    }
}