<?php

declare(strict_types=1);

namespace NotaFiscal\Tags;

class TagRefNfe extends Base
{
    private function __construct(
        private string $refNFe,
    ) {
    }

    public static function create(
        string $refNFe,
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

    public function refNFe(): string
    {
        return $this->refNFe;
    }
}