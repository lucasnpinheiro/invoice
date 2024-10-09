<?php

declare(strict_types=1);

namespace NotaFiscal\Tags;

class TagTransp extends Base
{
    private function __construct(
        private int $modFrete,
    ) {
    }

    public static function create(
        int $modFrete,
    ): self {
        return new self(
            $modFrete
        );
    }

    public function toArray(): array
    {
        return [
            'refNFe' => $this->modFrete(),
        ];
    }

    public function modFrete(): int
    {
        return $this->modFrete;
    }
}