## Gestor NFe em PHP

### Intalando o projeto

```bash
  composer install lucasnpinheiro/nota_fiscal
```

### Exemplo o projeto

```php
<?php

use NotaFiscal\Dto\CertificateParamsDto;
use NotaFiscal\NotaFiscalBase;

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
```