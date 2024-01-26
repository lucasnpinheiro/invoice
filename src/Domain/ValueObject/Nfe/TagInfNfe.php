<?php


declare(strict_types=1);

namespace Lucasnpinheiro\Invoice\Domain\ValueObject\Nfe;

class TagInfNfe extends Base
{
    private function __construct(private string $version, private ?string $pk_nItem, private ?string $id)
    {
        $this->version = $version;
        $this->id = $id;
        $this->pk_nItem = $pk_nItem;
    }

    public static function create(): self
    {
        return new self(
            '4.00',
            null,
            null
        );
    }

    public function version(): string
    {
        return $this->version;
    }

    public function pkNItem(): ?string
    {
        return $this->pk_nItem;
    }

    public function id(): ?string
    {
        return $this->id;
    }

    public function toArray(): array
    {
        return [
            'versao' => $this->version(),
            'pk_nItem' => $this->pkNItem(),
            'id' => $this->id()
        ];
    }
}
