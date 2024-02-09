<?php

namespace Lucasnpinheiro\Invoice\Tests\Unit\Domain\Entity;

use Lucasnpinheiro\Invoice\Domain\Entity\Client;
use Lucasnpinheiro\Invoice\Domain\ValueObject\IntegerValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\StringValue;
use Lucasnpinheiro\Invoice\Tests\Stubs\Domain\Entity\AddressStub;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testCreateAndGetters()
    {
        $id = IntegerValue::create(1);
        $name = StringValue::create('John Doe');
        $document = StringValue::create('123456789');
        $email = StringValue::create('john@example.com');
        $phone = StringValue::create('1234567890');
        $address = AddressStub::random();

        $client = Client::create($id, $name, $document, $email, $phone, $address);

        $this->assertSame($id, $client->id());
        $this->assertSame($name, $client->name());
        $this->assertSame($document, $client->document());
        $this->assertSame($email, $client->email());
        $this->assertSame($phone, $client->phone());
        $this->assertSame($address, $client->address());
    }

    public function testToArray()
    {
        $id = IntegerValue::create(1);
        $name = StringValue::create('John Doe');
        $document = StringValue::create('123456789');
        $email = StringValue::create('john@example.com');
        $phone = StringValue::create('1234567890');
        $address = AddressStub::random();

        $client = Client::create($id, $name, $document, $email, $phone, $address);

        $expectedArray = [
            'id' => $id->value(),
            'name' => $name->value(),
            'document' => $document->value(),
            'email' => $email->value(),
            'phone' => $phone->value(),
            'address' => $address->toArray()
        ];

        $this->assertSame($expectedArray, $client->toArray());
    }
}