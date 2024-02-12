<?php

declare(strict_types=1);

namespace NotaFiscal;

class TagEnderDest extends Base
{
    private function __construct(
        private string $xNome,
        private string $xLgr,
        private string $nro,
        private string $xBairro,
        private string $cMun,
        private string $xMun,
        private string $UF,
        private string $CEP,
        private string $cPais,
        private string $xPais,
        private string $fone,
        private ?string $xCpl = null,
    ) {
    }

    public static function create(
        string $xNome,
        string $xLgr,
        string $nro,
        string $xBairro,
        string $cMun,
        string $xMun,
        string $UF,
        string $CEP,
        string $cPais,
        string $xPais,
        string $fone,
        ?string $xCpl,
    ): self {
        return new self(
            $xNome,
            $xLgr,
            $nro,
            $xBairro,
            $cMun,
            $xMun,
            $UF,
            $CEP,
            $cPais,
            $xPais,
            $fone,
            $xCpl
        );
    }

    public function xNome(): string
    {
        return $this->xNome;
    }

    public function xLgr(): string
    {
        return $this->xLgr;
    }

    public function nro(): string
    {
        return $this->nro;
    }

    public function xBairro(): string
    {
        return $this->xBairro;
    }

    public function cMun(): string
    {
        return $this->cMun;
    }

    public function xMun(): string
    {
        return $this->xMun;
    }

    public function UF(): string
    {
        return $this->UF;
    }

    public function CEP(): string
    {
        return $this->CEP;
    }

    public function cPais(): string
    {
        return $this->cPais;
    }

    public function xPais(): string
    {
        return $this->xPais;
    }

    public function fone(): string
    {
        return $this->fone;
    }

    public function xCpl(): ?string
    {
        return $this->xCpl;
    }

    public function toArray(): array
    {
        return [
            'xNome' => $this->xNome,
            'xLgr' => $this->xLgr,
            'nro' => $this->nro,
            'xBairro' => $this->xBairro,
            'cMun' => $this->cMun,
            'xMun' => $this->xMun,
            'UF' => $this->UF,
            'CEP' => $this->CEP,
            'cPais' => $this->cPais,
            'xPais' => $this->xPais,
            'fone' => $this->fone,
            'xCpl' => $this->xCpl,
        ];
    }
}