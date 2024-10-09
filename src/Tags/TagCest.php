<?php

declare(strict_types=1);

namespace NotaFiscal\Tags;

class TagCest extends Base
{
    private function __construct(
        private int $item,
        private string $CEST,
        private string $indEscala,
        private ?string $CNPJFab = null,
    ) {
    }

    public static function create(
        int $item,
        string $CEST,
        string $indEscala,
        ?string $CNPJFab = null,
    ): self {
        return new self(
            $item,
            $CEST,
            $indEscala,
            $CNPJFab
        );
    }

    public function toArray(): array
    {
        return [
            'item' => $this->item(),
            'CEST' => $this->CEST(),
            'indEscala' => $this->indEscala(),
            'CNPJFab' => $this->CNPJFab(),
        ];
    }

    public function item(): int
    {
        return $this->item;
    }

    public function CEST(): string
    {
        return $this->CEST;
    }

    public function indEscala(): string
    {
        return $this->indEscala;
    }

    public function CNPJFab(): ?string
    {
        return $this->CNPJFab;
    }
}