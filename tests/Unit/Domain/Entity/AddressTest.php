<?php

namespace Lucasnpinheiro\Invoice\Tests\Unit\Domain\Entity;

use Lucasnpinheiro\Invoice\Domain\Entity\Address;
use Lucasnpinheiro\Invoice\Domain\ValueObject\StringValue;
use PHPUnit\Framework\TestCase;

class AddressTest extends TestCase
{
    public function testCreateAddress()
    {
        $address = StringValue::create('123 Main St');
        $addressNumber = StringValue::create('456');
        $addressComplement = StringValue::create('Apt 789');
        $addressNeighborhood = StringValue::create('Downtown');
        $addressCity = StringValue::create('New York');
        $addressState = StringValue::create('NY');
        $addressCountry = StringValue::create('USA');
        $addressZipCode = StringValue::create('12345');

        $addressEntity = Address::create(
            $address,
            $addressNumber,
            $addressComplement,
            $addressNeighborhood,
            $addressCity,
            $addressState,
            $addressCountry,
            $addressZipCode
        );

        $this->assertInstanceOf(Address::class, $addressEntity);
        $this->assertEquals($address, $addressEntity->address());
        $this->assertEquals($addressNumber, $addressEntity->addressNumber());
        $this->assertEquals($addressComplement, $addressEntity->addressComplement());
        $this->assertEquals($addressNeighborhood, $addressEntity->addressNeighborhood());
        $this->assertEquals($addressCity, $addressEntity->addressCity());
        $this->assertEquals($addressState, $addressEntity->addressState());
        $this->assertEquals($addressCountry, $addressEntity->addressCountry());
        $this->assertEquals($addressZipCode, $addressEntity->addressZipCode());
    }

    public function testToArray()
    {
        $address = StringValue::create('123 Main St');
        $addressNumber = StringValue::create('456');
        $addressComplement = StringValue::create('Apt 789');
        $addressNeighborhood = StringValue::create('Downtown');
        $addressCity = StringValue::create('New York');
        $addressState = StringValue::create('NY');
        $addressCountry = StringValue::create('USA');
        $addressZipCode = StringValue::create('12345');

        $addressEntity = Address::create(
            $address,
            $addressNumber,
            $addressComplement,
            $addressNeighborhood,
            $addressCity,
            $addressState,
            $addressCountry,
            $addressZipCode
        );

        $expectedArray = [
            'address' => '123 Main St',
            'addressNumber' => '456',
            'addressComplement' => 'Apt 789',
            'addressNeighborhood' => 'Downtown',
            'addressCity' => 'New York',
            'addressState' => 'NY',
            'addressCountry' => 'USA',
            'addressZipCode' => '12345',
        ];

        $this->assertEquals($expectedArray, $addressEntity->toArray());
    }
}
