<?php

namespace Lucasnpinheiro\NotaFiscal\Tests\Unit\Dto;

use Exception;
use Lucasnpinheiro\NotaFiscal\Dto\CertificateParamsDto;
use PHPUnit\Framework\TestCase;

class CertificateParamsDtoTest extends TestCase
{
    public function testConstructor(): void
    {
        $dto = new CertificateParamsDto(
            'path',
            'password',
            '12345678901234',
            'Razão Social',
            'UF',
            2
        );

        $this->assertInstanceOf(CertificateParamsDto::class, $dto);
    }

    public function testCreate(): void
    {
        $dto = CertificateParamsDto::create(
            'path',
            'password',
            '12345678901234',
            'Razão Social',
            'UF',
            2
        );

        $this->assertInstanceOf(CertificateParamsDto::class, $dto);
    }

    public function testCreateWithInvalidCnpj(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('CNPJ inválido');

        CertificateParamsDto::create(
            'path',
            'password',
            '123456789012345',
            'Razão Social',
            'UF',
            2
        );
    }

    public function testToArray(): void
    {
        $dto = new CertificateParamsDto(
            'path',
            'password',
          '12345678901234',
           'Razão Social',
         'UF',
            2,
        );

        $expectedArray = [
            'path' => 'path',
            'password' => 'password',
            'cnpj' => '12345678901234',
            'razao_social' => 'Razão Social',
            'uf' => 'UF',
            'ambiente' => 2,
        ];

        $this->assertSame($expectedArray, $dto->toArray());
    }

    public function testToObject(): void
    {
        $dto = new CertificateParamsDto(
            'path',
            'password',
            '12345678901234',
            'Razão Social',
            'UF',
            2,
        );

        $expectedArray = (object)[
            'path' => 'path',
            'password' => 'password',
            'cnpj' => '12345678901234',
            'razao_social' => 'Razão Social',
            'uf' => 'UF',
            'ambiente' => 2,
        ];

        $this->assertEquals($expectedArray, $dto->toObject());
    }

    public function testPath(): void
    {
        $dto = new CertificateParamsDto(
            'path',
            'password',
            '12345678901234',
            'Razão Social',
            'UF',
            2
        );

        $this->assertSame('path', $dto->path());
    }

    public function testPassword(): void
    {
        $dto = new CertificateParamsDto(
            'path',
            'password',
            '12345678901234',
            'Razão Social',
            'UF',
            2
        );

        $this->assertSame('password', $dto->password());
    }

    public function testCnpj(): void
    {
        $dto = new CertificateParamsDto(
            'path',
            'password',
            '12345678901234',
            'Razão Social',
            'UF',
            2
        );

        $this->assertSame('12345678901234', $dto->cnpj());
    }

    public function testRazaoSocial(): void
    {
        $dto = new CertificateParamsDto(
            'path',
            'password',
            '12345678901234',
            'Razão Social',
            'UF',
            2
        );

        $this->assertSame('Razão Social', $dto->razaoSocial());
    }

    public function testUf(): void
    {
        $dto = new CertificateParamsDto(
            'path',
            'password',
            '12345678901234',
            'Razão Social',
            'UF',
            2
        );

        $this->assertSame('UF', $dto->uf());
    }

    public function testAmbiente(): void
    {
        $dto = new CertificateParamsDto(
            'path',
            'password',
            '12345678901234',
            'Razão Social',
            'UF',
            2
        );

        $this->assertSame(2, $dto->ambiente());
    }
}