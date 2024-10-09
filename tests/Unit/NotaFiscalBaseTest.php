<?php

declare(strict_types=1);

namespace NotaFiscal;

use Exception;
use NotaFiscal\Dto\CertificateParamsDto;
use PHPUnit\Framework\TestCase;
use stdClass;
use TypeError;

class NotaFiscalBaseTest extends TestCase
{
    public function testGetCertificateWithInvalidPath(): void
    {
        $notaFiscalBase = new NotaFiscalBase();
        $dto = CertificateParamsDto::create(
            'invalid/path',
            'password',
            '12345678901234',
            'Razão Social',
            'UF',
            2
        );

        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Certificado não encontrado");
        $notaFiscalBase->getCertificate($dto);
    }

    public function testGetCertificateWithEmptyPassword(): void
    {
        $notaFiscalBase = new NotaFiscalBase();
        $dto = CertificateParamsDto::create(
            'path/to/certificate.pfx',
            '',
            '12345678901234',
            'Razão Social',
            'UF',
            2
        );

        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Senha do certificado não informada");
        $notaFiscalBase->getCertificate($dto);
    }

    public function testGetCertificateWithInvalidDto(): void
    {
        $notaFiscalBase = new NotaFiscalBase();
        $dto = new stdClass();

        $this->expectException(TypeError::class);
        $notaFiscalBase->getCertificate($dto);
    }
}