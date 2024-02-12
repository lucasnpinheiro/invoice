<?php

declare(strict_types=1);

namespace NotaFiscal;

class TagInfAdic extends Base
{
    private function __construct(
        private ?string $infAdFisco = null,
        private ?string $infCpl = null,
    ) {
    }

    public static function create(
        ?string $infAdFisco = null,
        ?string $infCpl = null,
    ): self {
        return new self(
            $infAdFisco,
            $infCpl
        );
    }

    public function infAdFisco(): ?string
    {
        return $this->infAdFisco;
    }

    public function infCpl(): ?string
    {
        return $this->infCpl;
    }

    public function toArray(): array
    {
        return [
            'infAdFisco' => $this->infAdFisco(),
            'infCpl' => $this->infCpl(),
        ];
    }
}