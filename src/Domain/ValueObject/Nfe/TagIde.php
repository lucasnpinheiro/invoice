<?php


declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Domain\ValueObject\Nfe;

class TagIde extends Base
{
    private function __construct(
        private string $cUF,
        private string $natOp,
        private string $mod,
        private string $serie,
        private string $nNF,
        private string $dhEmi,
        private string $dhSaiEnt,
        private string $tpNF,
        private string $idDest,
        private string $cMunFG,
        private string $tpImp,
        private string $tpEmis,
        private string $tpAmb,
        private string $finNFe,
        private string $indFinal,
        private string $indPres,
        private string $procEmi,
        private string $verProc,
        private string $dhCont,
        private string $xJust
    ) {
    }

    public static function create(
        string $cUF,
        string $natOp,
        string $mod,
        string $serie,
        string $nNF,
        string $dhEmi,
        string $dhSaiEnt,
        string $tpNF,
        string $idDest,
        string $cMunFG,
        string $tpImp,
        string $tpEmis,
        string $tpAmb,
        string $finNFe,
        string $indFinal,
        string $indPres,
        string $procEmi,
        string $verProc,
        string $dhCont,
        string $xJust
    ): self {
        return new self(
            $cUF,
            $natOp,
            $mod,
            $serie,
            $nNF,
            $dhEmi,
            $dhSaiEnt,
            $tpNF,
            $idDest,
            $cMunFG,
            $tpImp,
            $tpEmis,
            $tpAmb,
            $finNFe,
            $indFinal,
            $indPres,
            $procEmi,
            $verProc,
            $dhCont,
            $xJust
        );
    }

    public function cUF(): string
    {
        return $this->cUF;
    }

    public function natOp(): string
    {
        return $this->natOp;
    }

    public function mod(): string
    {
        return $this->mod;
    }

    public function serie(): string
    {
        return $this->serie;
    }

    public function nNF(): string
    {
        return $this->nNF;
    }

    public function dhEmi(): string
    {
        return $this->dhEmi;
    }

    public function dhSaiEnt(): string
    {
        return $this->dhSaiEnt;
    }

    public function tpNF(): string
    {
        return $this->tpNF;
    }

    public function idDest(): string
    {
        return $this->idDest;
    }

    public function cMunFG(): string
    {
        return $this->cMunFG;
    }

    public function tpImp(): string
    {
        return $this->tpImp;
    }

    public function tpEmis(): string
    {
        return $this->tpEmis;
    }

    public function tpAmb(): string
    {
        return $this->tpAmb;
    }

    public function finNFe(): string
    {
        return $this->finNFe;
    }

    public function indFinal(): string
    {
        return $this->indFinal;
    }

    public function indPres(): string
    {
        return $this->indPres;
    }

    public function procEmi(): string
    {
        return $this->procEmi;
    }

    public function verProc(): string
    {
        return $this->verProc;
    }

    public function dhCont(): string
    {
        return $this->dhCont;
    }

    public function xJust(): string
    {
        return $this->xJust;
    }

    public function toArray(): array
    {
        return [
            'cUF' => $this->cUF(),
            'natOp' => $this->natOp(),
            'mod' => $this->mod(),
            'serie' => $this->serie(),
            'nNF' => $this->nNF(),
            'dhEmi' => $this->dhEmi(),
            'dhSaiEnt' => $this->dhSaiEnt(),
            'tpNF' => $this->tpNF(),
            'idDest' => $this->idDest(),
            'cMunFG' => $this->cMunFG(),
            'tpImp' => $this->tpImp(),
            'tpEmis' => $this->tpEmis(),
            'tpAmb' => $this->tpAmb(),
            'finNFe' => $this->finNFe(),
            'indFinal' => $this->indFinal(),
            'indPres' => $this->indPres(),
            'procEmi' => $this->procEmi(),
            'verProc' => $this->verProc(),
            'dhCont' => $this->dhCont(),
            'xJust' => $this->xJust()
        ];
    }
}
