<?php

declare(strict_types=1);

namespace NotaFiscal\Tags;

class TagInfNfe extends Base
{
    private function __construct(
        private string $versao,
        private ?string $pkNItem = null,
        private ?string $id = null
    ) {
    }

    public static function create(
        ?string $versao,
        ?string $pkNItem,
        ?string $id
    ): self {
        return new self(
            $versao ?? '4.00',
            $pkNItem,
            $id
        );
    }

    public function toArray(): array
    {
        return [
            'versao' => $this->versao(),
            'pk_nItem' => $this->pkNItem(),
            'Id' => $this->id()
        ];
    }

    public function versao(): string
    {
        return $this->versao;
    }

    public function pkNItem(): ?string
    {
        return $this->pkNItem;
    }

    public function id(): ?string
    {
        return $this->id;
    }
}