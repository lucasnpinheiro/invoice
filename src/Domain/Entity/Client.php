<?php

declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Domain\Entity;

use Lucasnpinheiro\Invoice\Domain\ValueObject\IntegerValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\StringValue;

class Client
{
    private function __construct(
        private IntegerValue $id,
        private StringValue $name,
        private StringValue $document,
        private StringValue $email,
        private StringValue $phone,
        private Address $address,
    ) {
    }

    public static function create(
        IntegerValue $id,
        StringValue $name,
        StringValue $document,
        StringValue $email,
        StringValue $phone,
        Address $address,
    ): self {
        return new self(
            $id,
            $name,
            $document,
            $email,
            $phone,
            $address
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

    public function document(): StringValue
    {
        return $this->document;
    }

    public function email(): StringValue
    {
        return $this->email;
    }

    public function phone(): StringValue
    {
        return $this->phone;
    }

    public function address(): Address
    {
        return $this->address;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id()->value(),
            'name' => $this->name()->value(),
            'document' => $this->document()->value(),
            'email' => $this->email()->value(),
            'phone' => $this->phone()->value(),
            'address' => $this->address()->toArray()
        ];
    }
}