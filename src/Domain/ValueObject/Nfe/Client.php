<?php

declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Domain\ValueObject\Nfe;

class Client extends Base
{
    private function __construct(
        private string $name,
        private string $document,
        private string $email,
        private string $phone,
        private string $address,
        private string $addressNumber,
        private string $addressNeighborhood,
        private string $addressCity,
        private string $addressState,
        private string $addressZipCode,
        private string $addressCountry,
        private ?string $addressComplement,
    ) {
    }

    public static function create(
        string $name,
        string $document,
        string $email,
        string $phone,
        string $address,
        string $addressNumber,
        string $addressNeighborhood,
        string $addressCity,
        string $addressState,
        string $addressZipCode,
        string $addressCountry,
        ?string $addressComplement,
    ): self {
        return new self(
            $name,
            $document,
            $email,
            $phone,
            $address,
            $addressNumber,
            $addressNeighborhood,
            $addressCity,
            $addressState,
            $addressZipCode,
            $addressCountry,
            $addressComplement,
        );
    }

    public function name(): string
    {
        return $this->name;
    }

    public function document(): string
    {
        return $this->document;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function phone(): string
    {
        return $this->phone;
    }

    public function address(): string
    {
        return $this->address;
    }

    public function addressNumber(): string
    {
        return $this->addressNumber;
    }

    public function addressNeighborhood(): string
    {
        return $this->addressNeighborhood;
    }

    public function addressCity(): string
    {
        return $this->addressCity;
    }

    public function addressState(): string
    {
        return $this->addressState;
    }

    public function addressZipCode(): string
    {
        return $this->addressZipCode;
    }

    public function addressCountry(): string
    {
        return $this->addressCountry;
    }

    public function addressComplement(): ?string
    {
        return $this->addressComplement;
    }

    public function toArray(): array{
        return [
            'name' => $this->name(),
            'document' => $this->document(),
            'email' => $this->email(),
            'phone' => $this->phone(),
            'address' => $this->address(),
            'addressNumber' => $this->addressNumber(),
            'addressNeighborhood' => $this->addressNeighborhood(),
            'addressCity' => $this->addressCity(),
            'addressState' => $this->addressState(),
            'addressZipCode' => $this->addressZipCode(),
            'addressCountry' => $this->addressCountry(),
            'addressComplement' => $this->addressComplement(),
        ];
    }
}
