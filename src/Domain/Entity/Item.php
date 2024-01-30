<?php

declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Domain\Entity;

use Lucasnpinheiro\Invoice\Domain\ValueObject\IntegerValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\PriceValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\StringValue;

class Item
{
    private function __construct(
        private IntegerValue $id,
        private StringValue $name,
        private StringValue $description,
        private PriceValue $quantity,
        private PriceValue $price,
        private Taxes $taxes
    ) {
    }

    public static function create(
        IntegerValue $id,
        StringValue $name,
        StringValue $description,
        PriceValue $quantity,
        PriceValue $price,
    ): self {
        return new self(
            $id, $name, $description, $quantity, $price, Taxes::create(),
        );
    }

    public function id(): IntegerValue
    {
        return $this->id;
    }

    public function name(): StringValue
    {
        return $this->name;
    }

    public function description(): StringValue
    {
        return $this->description;
    }

    public function quantity(): PriceValue
    {
        return $this->quantity;
    }

    public function price(): PriceValue
    {
        return $this->price;
    }

    public function taxes(): Taxes
    {
        return $this->taxes;
    }

    public function total(): PriceValue
    {
        return PriceValue::create($this->price->multiply($this->quantity->value())->value());
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id()->value(),
            'name' => $this->name()->value(),
            'description' => $this->description()->value(),
            'quantity' => $this->quantity()->value(),
            'price' => $this->price()->value(),
            'taxes' => $this->taxes()->toArray(),
            'total' => $this->total()->value(),
        ];
    }

}
