<?php
namespace Lucasnpinheiro\Invoice\Tests\Stubs\Domain;

use Lucasnpinheiro\Invoice\Domain\Entity\Address;
use Lucasnpinheiro\Invoice\Domain\ValueObject\StringValue;

class AddressStub
{
    public static function random(): Address
    {
        $address = StringValue::create('123 Main St');
        $addressNumber = StringValue::create('456');
        $addressComplement = StringValue::create('Apt 789');
        $addressNeighborhood = StringValue::create('Downtown');
        $addressCity = StringValue::create('New York');
        $addressState = StringValue::create('NY');
        $addressCountry = StringValue::create('USA');
        $addressZipCode = StringValue::create('12345');

        return Address::create(
            $address,
            $addressNumber,
            $addressComplement,
            $addressNeighborhood,
            $addressCity,
            $addressState,
            $addressCountry,
            $addressZipCode
        );
    }
}
