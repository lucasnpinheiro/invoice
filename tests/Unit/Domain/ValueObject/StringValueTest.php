<?php

namespace Lucasnpinheiro\Invoice\Tests\Unit\Domain\ValueObject;

use Lucasnpinheiro\Invoice\Domain\ValueObject\StringValue;
use PHPUnit\Framework\TestCase;

class StringValueTest extends TestCase
{
    public function testGetValue()
    {
        $value = StringValue::create('teste a');
        $this->assertEquals('teste a', $value->value());
    }

    public function testToString()
    {
        $value = StringValue::create('teste B');
        $this->assertEquals('teste B', $value->__toString());
    }

    public function testToEmpty()
    {
        $value = StringValue::create();
        $this->assertEmpty($value->value());
    }
}