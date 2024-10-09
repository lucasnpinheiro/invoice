<?php

declare(strict_types=1);

namespace Lucasnpinheiro\NotaFiscal\Tests\Unit;

use Exception;
use InvalidArgumentException;
use Lucasnpinheiro\NotaFiscal\Dto\CertificateParamsDto;
use Lucasnpinheiro\NotaFiscal\NotaFiscalBase;
use NFePHP\Common\Certificate;
use NFePHP\NFe\Tools;
use PHPUnit\Framework\TestCase;
use Throwable;

class NotaFiscalBaseTest extends TestCase
{
    public function testGetCertificateWithThrowable(): void
    {
        $notaFiscalBase = new NotaFiscalBase();
        $dto = CertificateParamsDto::create(
            'path/to/certificate.pfx',
            'password',
            '12345678901234',
            'Razão Social',
            'UF',
            2
        );

        // Mock the Certificate::readPfx method to throw a Throwable
        $certificateMock = $this->createMock(Certificate::class);
        $certificateMock->method('readPfx')->willThrowException(new Exception('Impossivel ler o certificado, ocorreu o seguinte erro: (error:0680008E:asn1 encoding routines::not enough data)'));

        // Replace the Certificate class with the mock
        $notaFiscalBase->getCertificate = function () use ($certificateMock, $dto) {
            return new Tools(json_encode([
                "atualizacao" => date('Y-m-d H:i:s'),
                "tpAmb" => $dto->ambiente(),
                "razaosocial" => $dto->razaoSocial(),
                "siglaUF" => $dto->uf(),
                "cnpj" => $dto->cnpj(),
                "schemes" => "PL_009_V4",
                "versao" => "4.00",
                "tokenIBPT" => "",
                "CSC" => "",
                "CSCid" => "",
                "aProxyConf" => [
                    "proxyIp" => "",
                    "proxyPort" => "",
                    "proxyUser" => "",
                    "proxyPass" => ""
                ]
            ]), $certificateMock->readPfx($dto->path(), $dto->password()));
        };

        $this->expectException(Throwable::class);
        $this->expectExceptionMessage('Impossivel ler o certificado, ocorreu o seguinte erro: (error:0680008E:asn1 encoding routines::not enough data)');
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

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Senha do certificado não informada");
        $notaFiscalBase->getCertificate($dto);
    }

    public function testGetCertificateWithInvalidPath(): void
    {
        $notaFiscalBase = new NotaFiscalBase();
        $dto = CertificateParamsDto::create(
            '',
            'password',
            '12345678901234',
            'Razão Social',
            'UF',
            2
        );

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Certificado não encontrado");
        $notaFiscalBase->getCertificate($dto);
    }
}