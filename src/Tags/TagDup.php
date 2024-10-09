<?php

declare(strict_types=1);

namespace Lucasnpinheiro\NotaFiscal\Tags;

use DateTime;

class TagDup extends Base
{
    private function __construct(
        private string $nDup,
        private DateTime|string $dVenc,
        private float $vDup,
    ) {
    }

    public static function create(
        string $nDup,
        DateTime|string $dVenc,
        float $vDup,
    ): self {
        return new self(
            $nDup,
            $dVenc,
            $vDup
        );
    }

    public function toArray(): array
    {
        return [
            'nDup' => $this->nDup(),
            'dVenc' => $this->dVenc(),
            'vDup' => $this->vDup(),
        ];
    }

    public function nDup(): string
    {
        return $this->nDup;
    }

    public function dVenc(): string
    {
        if ($this->dVenc instanceof DateTime) {
            return $this->dVenc->format('Y-m-d');
        }
        return $this->dVenc;
    }

    public function vDup(): float
    {
        return $this->vDup;
    }
}