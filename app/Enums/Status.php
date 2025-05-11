<?php

namespace App\Enums;

enum Status: string
{
    case Active = 'ativo';
    case Inactive = 'inativo';

    public function label(): string
    {
        return match ($this) {
            self::Active   => 'Ativo',
            self::Inactive => 'Inativo',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
