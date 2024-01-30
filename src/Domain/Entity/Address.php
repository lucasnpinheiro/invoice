<?php

namespace Lucasnpinheiro\Invoice\Domain\Entity;

use Lucasnpinheiro\Invoice\Domain\ValueObject\StringValue;

class Address
{
    private function __construct(
        private StringValue $address,
        private StringValue $addressNumber,
        private ?StringValue $addressComplement,
        private ?StringValue $addressNeighborhood,
        private ?StringValue $addressCity,
        private ?StringValue $addressState,
        private ?StringValue $addressCountry,
        private ?StringValue $addressZipCode,
    ) {
    }

    public static function create(
        StringValue $address,
        StringValue $addressNumber,
        ?StringValue $addressComplement,
        ?StringValue $addressNeighborhood,
        ?StringValue $addressCity,
        ?StringValue $addressState,
        ?StringValue $addressCountry,
        ?StringValue $addressZipCode,
    ): self {
        return new self(
            $address,
            $addressNumber,
            $addressComplement,
            $addressNeighborhood,
            $addressCity,
            $addressState,
            $addressCountry,
            $addressZipCode,
        );
    }

    public function address(): StringValue
    {
        return $this->address;
    }

    public function addressNumber(): StringValue
    {
        return $this->addressNumber;
    }

    public function addressComplement(): ?StringValue
    {
        return $this->addressComplement;
    }

    public function addressNeighborhood(): ?StringValue
    {
        return $this->addressNeighborhood;
    }

    public function addressCity(): ?StringValue
    {
        return $this->addressCity;
    }

    public function addressState(): ?StringValue
    {
        return $this->addressState;
    }

    public function addressCountry(): ?StringValue
    {
        return $this->addressCountry;
    }

    public function addressZipCode(): ?StringValue
    {
        return $this->addressZipCode;
    }

    public function toArray(): array
    {
        return [
            'address' => $this->address->value(),
            'addressNumber' => $this->addressNumber->value(),
            'addressComplement' => $this->addressComplement?->value(),
            'addressNeighborhood' => $this->addressNeighborhood?->value(),
            'addressCity' => $this->addressCity?->value(),
            'addressState' => $this->addressState?->value(),
            'addressCountry' => $this->addressCountry?->value(),
            'addressZipCode' => $this->addressZipCode?->value(),
        ];
    }
}