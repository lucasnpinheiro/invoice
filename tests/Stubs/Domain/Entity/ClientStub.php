<?php

declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Tests\Stubs\Domain\Entity;

use Lucasnpinheiro\Invoice\Domain\Entity\Client;
use Lucasnpinheiro\Invoice\Domain\ValueObject\IntegerValue;
use Lucasnpinheiro\Invoice\Domain\ValueObject\StringValue;

class ClientStub
{
    public static function random(): Client
    {
        $id = IntegerValue::create(1);
        $name = StringValue::create('John Doe');
        $document = StringValue::create('123456789');
        $email = StringValue::create('john@example.com');
        $phone = StringValue::create('1234567890');
        $address = AddressStub::random();

        return Client::create($id, $name, $document, $email, $phone, $address);
    }
}
