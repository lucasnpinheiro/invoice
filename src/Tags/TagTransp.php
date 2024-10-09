<?php

declare(strict_types=1);

namespace Lucasnpinheiro\NotaFiscal\Tags;

class TagTransp extends Base
{
    private function __construct(
        private int $refNFe,
    ) {
    }

    public static function create(
        int $refNFe,
    ): self {
        return new self(
            $refNFe
        );
    }

    public function toArray(): array
    {
        return [
            'refNFe' => $this->refNFe(),
        ];
    }

    public function refNFe(): int
    {
        return $this->refNFe;
    }
}