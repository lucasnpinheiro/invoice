<?php

namespace Lucasnpinheiro\NotaFiscal\Dto;

use Exception;

class CertificateParamsDto extends DtoAbstract
{
    public function __construct(
        readonly private string $path,
        readonly private string $password,
        readonly private string $cnpj,
        readonly private string $razaoSocial,
        readonly private string $uf,
        readonly private int $ambiente = 2
    ) {
    }

    public static function create(
        string $path,
        string $password,
        string $cnpj,
        string $razaoSocial,
        string $uf,
        int $ambiente = 2
    ): self {
        $cnpj = preg_replace('/\D/', '', $cnpj);

        if (strlen($cnpj) !== 14) {
            throw new Exception('CNPJ inválido');
        }

        return new self(
            $path,
            $password,
            $cnpj,
            $razaoSocial,
            $uf,
            $ambiente
        );
    }

    public function toArray(): array
    {
        return [
            'path' => $this->path(),
            'password' => $this->password(),
            'cnpj' => $this->cnpj(),
            'razao_social' => $this->razaoSocial(),
            'uf' => $this->uf(),
            'ambiente' => $this->ambiente()
        ];
    }

    public function path(): string
    {
        return $this->path;
    }

    public function password(): string
    {
        return $this->password;
    }

    public function cnpj(): string
    {
        return $this->cnpj;
    }

    public function razaoSocial(): string
    {
        return $this->razaoSocial;
    }

    public function uf(): string
    {
        return $this->uf;
    }

    public function ambiente(): int
    {
        return $this->ambiente;
    }
}