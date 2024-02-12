<?php

declare(strict_types=1);

namespace NotaFiscal\Tags;

class TagInfRespTec extends Base
{
    private function __construct(
        private string $CNPJ,
        private string $xContato,
        private string $email,
        private string $fone,
        private ?string $CSRT = null,
        private ?string $idCSRT = null,
    ) {
    }

    public static function create(
        string $CNPJ,
        string $xContato,
        string $email,
        string $fone,
        ?string $CSRT = null,
        ?string $idCSRT = null,
    ): self {
        return new self(
            $CNPJ,
            $xContato,
            $email,
            $fone,
            $CSRT,
            $idCSRT
        );
    }

    public function CNPJ(): string
    {
        return $this->CNPJ;
    }

    public function xContato(): string
    {
        return $this->xContato;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function fone(): string
    {
        return $this->fone;
    }

    public function CSRT(): ?string
    {
        return $this->CSRT;
    }

    public function idCSRT(): ?string
    {
        return $this->idCSRT;
    }

    public function toArray(): array
    {
        return [
            'CNPJ' => $this->CNPJ(),
            'xContato' => $this->xContato(),
            'email' => $this->email(),
            'fone' => $this->fone(),
            'CSRT' => $this->CSRT(),
            'idCSRT' => $this->idCSRT(),
        ];
    }

}