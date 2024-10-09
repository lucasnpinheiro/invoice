<?php

declare(strict_types=1);

namespace Lucasnpinheiro\NotaFiscal;

use InvalidArgumentException;
use Lucasnpinheiro\NotaFiscal\Dto\CertificateParamsDto;
use NFePHP\Common\Certificate;
use NFePHP\NFe\Tools;
use Throwable;

class NotaFiscalBase
{
    public function getCertificate(CertificateParamsDto $dto): Tools
    {
        if (empty($dto->password())) {
            throw new InvalidArgumentException("Senha do certificado não informada");
        }

        if (empty($dto->path())) {
            throw new InvalidArgumentException("Certificado não encontrado");
        }

        try {
            $config = [
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
            ];

            return new Tools(json_encode($config), Certificate::readPfx($dto->path(), $dto->password()));
        } catch (Throwable $th) {
            throw $th;
        }
    }
}