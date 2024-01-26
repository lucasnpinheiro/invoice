<?php
declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Domain\Entity;

class Item
{
private function __construct(
        private int $id,
        private string $name,
        private string $description,
        private float $quantity,
        private float $price,
        private Taxes $taxes,
    ) {
    }

    public static function create(
        int $id,
        string $name,
        string $description,
        float $quantity,
        float $price,
        Taxes $taxes,
    ): self
    {
        return new self(
            $id,
            $name,
            $description,
            $quantity,
            $price,
            $taxes,
        );
    }

}
