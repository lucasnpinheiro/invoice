<?php

namespace Lucasnpinheiro\Invoice\Domain\Entity;

class Taxes
{
private function __construct(
    private string $taxName,
        private float $value,
        private float $tax,
        private float $total = 0,
        private bool $disabledCalculate = false,
    ) {
    }
    public static function create(
        string $taxName,
        float $value,
        float $tax,
    ):self
    {
        return new self(
            $taxName,
            $value,
            $tax,
        );
    }

    public function taxName():string
    {
        return $this->taxName;
    }

    public function value():float
    {
        return $this->value;
    }

    public function tax():float
    {
        return $this->tax;
    }

    public function total():float
    {
        return $this->total;
    }

    public function calculate():void
    {
        if($this->disabledCalculate){
            $this->tax = 0;
            $this->value =0;
            $this->total = 0;
            return;
        }

        $this->total = $this->value * $this->tax;
    }

    public function disabledCalculate(): void
    {
         $this->disabledCalculate = true;
    }

    public function toArray():array
    {
        return [
            'value' => $this->value(),
            'tax' => $this->tax(),
            'total'=> $this->total(),
            'disabledCalculate' => $this->disabledCalculate,
        ];
    }
}
