<?php

declare(strict_types=1);

namespace NotaFiscal;

use NFePHP\Common\Certificate;
use NFePHP\NFe\Tools;

class NotaFiscalBase
{

    public function getCertificateConfiguration(string $cnpj, string $nome, string $uf, int $ambiente = 2): array
    {
        return [
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
    }

    public function getCertificate(
        string $path,
        string $password,
        string $cnpj,
        string $nome,
        string $uf,
        int $ambiente = 2
    ) {
        if (!file_exists($path)) {
            throw new \Exception("Certificado não encontrado");
        }

        if (empty($password)) {
            throw new \Exception("Senha do certificado não informada");
        }

        try {
            $config = $this->getCertificateConfiguration($cnpj, $nome, $uf, $ambiente);
            $certificate = Certificate::readPfx($path, $password);
            return new Tools(json_encode($config), $certificate);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}