<?php

declare(strict_types=1);

namespace NotaFiscal\Tags;

class TagInfNfe extends Base
{
    private function __construct(
        private string $versao,
        private ?string $pk_nItem = null,
        private ?string $Id = null
    ) {
    }

    public static function create(
        ?string $versao,
        ?string $pk_nItem,
        ?string $Id
    ): self {
        return new self(
            $versao ?? '4.00',
                $pk_nItem,
            $Id
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
        return $this->pk_nItem;
    }

    public function id(): ?string
    {
        return $this->Id;
    }
}