<?php

namespace App\Enums;

enum Status: string
{
    case Inactive = 'inativo';
    case Active = 'ativo';

    public function label(): string
    {
        return match ($this) {
            self::Inactive => 'Inativo',
            self::Active   => 'Ativo',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
