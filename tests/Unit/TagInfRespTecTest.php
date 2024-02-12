<?php

declare(strict_types=1);

use NotaFiscal\TagInfRespTec;
use PHPUnit\Framework\TestCase;

class TagInfRespTecTest extends TestCase
{
    public function testCreate(): void
    {
        $tagInfRespTec = TagInfRespTec::create(
            '1234567890',
            'John Doe',
            'john@example.com',
            '1234567890',
            'CSRT123',
            'IDCSRT123'
        );

        $this->assertInstanceOf(TagInfRespTec::class, $tagInfRespTec);
        $this->assertSame('1234567890', $tagInfRespTec->CNPJ());
        $this->assertSame('John Doe', $tagInfRespTec->xContato());
        $this->assertSame('john@example.com', $tagInfRespTec->email());
        $this->assertSame('1234567890', $tagInfRespTec->fone());
        $this->assertSame('CSRT123', $tagInfRespTec->CSRT());
        $this->assertSame('IDCSRT123', $tagInfRespTec->idCSRT());
    }

    public function testCreateWithNullValues(): void
    {
        $tagInfRespTec = TagInfRespTec::create(
            '1234567890',
            'John Doe',
            'john@example.com',
            '1234567890'
        );

        $this->assertInstanceOf(TagInfRespTec::class, $tagInfRespTec);
        $this->assertSame('1234567890', $tagInfRespTec->CNPJ());
        $this->assertSame('John Doe', $tagInfRespTec->xContato());
        $this->assertSame('john@example.com', $tagInfRespTec->email());
        $this->assertSame('1234567890', $tagInfRespTec->fone());
        $this->assertNull($tagInfRespTec->CSRT());
        $this->assertNull($tagInfRespTec->idCSRT());
    }

    public function testToArray(): void
    {
        $tagInfRespTec = TagInfRespTec::create(
            '1234567890',
            'John Doe',
            'john@example.com',
            '1234567890',
            'CSRT123',
            'IDCSRT123'
        );

        $expectedArray = [
            'CNPJ' => '1234567890',
            'xContato' => 'John Doe',
            'email' => 'john@example.com',
            'fone' => '1234567890',
            'CSRT' => 'CSRT123',
            'idCSRT' => 'IDCSRT123',
        ];

        $this->assertSame($expectedArray, $tagInfRespTec->toArray());
    }
}