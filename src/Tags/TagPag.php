<?php

declare(strict_types=1);

namespace Lucasnpinheiro\NotaFiscal\Tags;

class TagPag extends Base
{
    private function __construct(
        private ?float $vTroco,
    ) {
    }

    public static function create(
        ?float $vTroco,
    ): self {
        return new self(
            $vTroco
        );
    }

    public function toArray(): array
    {
        return [
            'vTroco' => $this->vTroco(),
        ];
    }

    public function vTroco(): ?float
    {
        return $this->vTroco;
    }
}