<?php

declare(strict_types=1);

namespace NotaFiscal\Tags;

class TagVol extends Base
{
    private function __construct(
        private int $item = 1,
        private int $qVol = 1,
        private int $nVol = 1,
        private float $peso = 0.0,
        private string $esp = 'VOLUME',
        private ?string $marca = null
    ) {
    }

    public static function create(
        int $item = 1,
        int $qVol = 1,
        int $nVol = 1,
        float $peso = 0.0,
        string $esp = 'VOLUME',
        ?string $marca = null
    ): self {
        return new self(
            $item,
            $qVol,
            $nVol,
            $peso,
            $esp,
            $marca
        );
    }

    public function toArray(): array
    {
        return [
            'item' => $this->item(),
            'qVol' => $this->qVol(),
            'nVol' => $this->nVol(),
            'peso' => $this->peso(),
            'esp' => $this->esp(),
            'marca' => $this->marca(),
        ];
    }

    public function item(): int
    {
        return $this->item;
    }

    public function qVol(): int
    {
        return $this->qVol;
    }

    public function nVol(): int
    {
        return $this->nVol;
    }

    public function peso(): float
    {
        return $this->peso;
    }

    public function esp(): string
    {
        return $this->esp;
    }

    public function marca(): ?string
    {
        return $this->marca;
    }
}