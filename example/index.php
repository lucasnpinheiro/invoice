<?php


use Lucasnpinheiro\NotaFiscal\Dto\CertificateParamsDto;
use Lucasnpinheiro\NotaFiscal\NotaFiscalBase;

require_once '../vendor/autoload.php';

$notaFiscal = new NotaFiscalBase();

$notaFiscal->getCertificate(
    CertificateParamsDto::create(
        'arquivo',
        '123',
        '12.123.123/2132-22',
        'Razão Social',
        'SP',
        2,
    )
);