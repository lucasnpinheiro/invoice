<?php

declare(strict_types=1);

namespace NotaFiscal\Tests\Unit;

use NotaFiscal\NotaFiscalBase;
use PHPUnit\Framework\TestCase;

class NotaFiscalBaseTest extends TestCase
{
    public function testGetCertificateConfiguration(): void
    {
        $notaFiscalBase = new NotaFiscalBase();

        $cnpj = '1234567890';
        $nome = 'Empresa Teste';
        $uf = 'SP';
        $ambiente = 2;

        $expectedConfiguration = [
            "atualizacao" => date('Y-m-d H:i:s'),
            "tpAmb" => $ambiente,
            "razaosocial" => $uf,
            "siglaUF" => $nome,
            "cnpj" => $cnpj,
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
        ];

        $this->assertSame($expectedConfiguration, $notaFiscalBase->getCertificateConfiguration($cnpj, $nome, $uf, $ambiente));
    }

    public function testGetCertificate(): void
    {
        $notaFiscalBase = new NotaFiscalBase();

        $path = '/path/to/certificate.pfx';
        $password = 'password';
        $cnpj = '1234567890';
        $nome = 'Empresa Teste';
        $uf = 'SP';
        $ambiente = 2;

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage("Certificado não encontrado");
        $notaFiscalBase->getCertificate($path, $password, $cnpj, $nome, $uf, $ambiente);
    }
}