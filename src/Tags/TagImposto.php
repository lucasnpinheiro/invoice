<?php

declare(strict_types=1);

namespace Lucasnpinheiro\NotaFiscal\Tags;

class TagImposto extends Base
{
    private function __construct(
        private int $item,
        private string $vTotTrib,
    ) {
    }

    public static function create(
        int $item,
        string $vTotTrib,
    ): self {
        return new self(
            $item,
            $vTotTrib
        );
    }

    public function toArray(): array
    {
        return [
            'item' => $this->item(),
            'vTotTrib' => $this->vTotTrib(),
        ];
    }

    public function item(): int
    {
        return $this->item;
    }

    public function vTotTrib(): string
    {
        return $this->vTotTrib;
    }
}