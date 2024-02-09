<?php

declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Domain\Entity;

use Lucasnpinheiro\Invoice\Domain\Entity\Taxes\Cofins;
use Lucasnpinheiro\Invoice\Domain\Entity\Taxes\Icms;
use Lucasnpinheiro\Invoice\Domain\Entity\Taxes\Ipi;
use Lucasnpinheiro\Invoice\Domain\Entity\Taxes\Pis;
use Lucasnpinheiro\Invoice\Domain\ValueObject\IntegerValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\PriceValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\StringValue;

class Item
{
    private function __construct(
        private IntegerValue $id,
        private StringValue $name,
        private StringValue $ean,
        private StringValue $ncm,
        private StringValue $cfop,
        private StringValue $sigla,
        private StringValue $orderPurchase,
        private StringValue $referenceSupplier,
        private StringValue $nameCompletion,
        private StringValue $cest,
        private StringValue $origin,
        private StringValue $csosn,
        private StringValue $cst,
        private PriceValue $quantity,
        private PriceValue $price,
        private PriceValue $otherExpenses,
        private PriceValue $discount,
        private PriceValue $taxes,
        private PriceValue $credit,
        private PriceValue $creditPercentage,
        private Icms $icms,
        private Pis $pis,
        private Ipi $ipi,
        private Cofins $cofins,
    ) {
    }

    public static function create(
        IntegerValue $id,
        StringValue $name,
        StringValue $ean,
        StringValue $ncm,
        StringValue $cfop,
        StringValue $sigla,
        StringValue $orderPurchase,
        StringValue $referenceSupplier,
        StringValue $nameCompletion,
        StringValue $cest,
        StringValue $origin,
        StringValue $csosn,
        StringValue $cst,
        PriceValue $quantity,
        PriceValue $price,
        PriceValue $otherExpenses,
        PriceValue $discount,
        PriceValue $taxes,
        PriceValue $credit,
        PriceValue $creditPercentage,
        Icms $icms,
        Pis $pis,
        Ipi $ipi,
        Cofins $cofins,
    ): self {
        return new self(
            $id,
            $name,
            $ean,
            $ncm,
            $cfop,
            $sigla,
            $orderPurchase,
            $referenceSupplier,
            $nameCompletion,
            $cest,
            $origin,
            $csosn,
            $cst,
            $quantity,
            $price,
            $otherExpenses,
            $discount,
            $taxes,
            $credit,
            $creditPercentage,
            $icms,
            $pis,
            $ipi,
            $cofins,
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

    public function ean(): StringValue
    {
        return $this->ean;
    }

    public function ncm(): StringValue
    {
        return $this->ncm;
    }

    public function cfop(): StringValue
    {
        return $this->cfop;
    }

    public function sigla(): StringValue
    {
        return $this->sigla;
    }

    public function orderPurchase(): StringValue
    {
        return $this->orderPurchase;
    }

    public function referenceSupplier(): StringValue
    {
        return $this->referenceSupplier;
    }

    public function nameCompletion(): StringValue
    {
        return $this->nameCompletion;
    }

    public function cest(): StringValue
    {
        return $this->cest;
    }

    public function origin(): StringValue
    {
        return $this->origin;
    }

    public function csosn(): StringValue
    {
        return $this->csosn;
    }

    public function cst(): StringValue
    {
        return $this->cst;
    }

    public function quantity(): PriceValue
    {
        return $this->quantity;
    }

    public function price(): PriceValue
    {
        return $this->price;
    }

    public function otherExpenses(): PriceValue
    {
        return $this->otherExpenses;
    }

    public function discount(): PriceValue
    {
        return $this->discount;
    }

    public function taxes(): PriceValue
    {
        return $this->taxes;
    }

    public function credit(): PriceValue
    {
        return $this->credit;
    }

    public function creditPercentage(): PriceValue
    {
        return $this->creditPercentage;
    }

    public function icms(): Icms
    {
        return $this->icms;
    }

    public function pis(): Pis
    {
        return $this->pis;
    }

    public function ipi(): Ipi
    {
        return $this->ipi;
    }

    public function cofins(): Cofins
    {
        return $this->cofins;
    }

    public function total(): PriceValue
    {
        return PriceValue::create(($this->quantity()->multiply($this->price()->value()))->value());
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id()->value(),
            'name' => $this->name()->value(),
            'ean' => $this->ean()->value(),
            'ncm' => $this->ncm()->value(),
            'cfop' => $this->cfop()->value(),
            'sigla' => $this->sigla()->value(),
            'order_purchase' => $this->orderPurchase()->value(),
            'reference_supplier' => $this->referenceSupplier()->value(),
            'name_completion' => $this->nameCompletion()->value(),
            'cest' => $this->cest()->value(),
            'origin' => $this->origin()->value(),
            'csosn' => $this->csosn()->value(),
            'cst' => $this->cst()->value(),
            'quantity' => $this->quantity()->value(),
            'price' => $this->price()->value(),
            'total' => $this->total()->value(),
            'other_expenses' => $this->otherExpenses()->value(),
            'discount' => $this->discount()->value(),
            'taxes' => $this->taxes()->value(),
            'credit' => $this->credit()->value(),
            'credit_percentage' => $this->creditPercentage()->value(),
            'icms' => $this->icms->toArray(),
            'pis' => $this->pis->toArray(),
            'ipi' => $this->ipi->toArray(),
            'cofins' => $this->cofins->toArray(),
        ];
    }

}