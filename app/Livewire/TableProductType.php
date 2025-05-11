<?php

namespace App\Livewire;

use App\Models\ProductType;
use Livewire\Component;

class TableProductType extends Table
{
    public static string $single = 'Tipo de Produto';

    public static string $model = ProductType::class;

    public static string $routeName = 'product-type.index';

    public static string $view = 'table-product-type';

    public static function headings(): array
    {
        return [
            'Nome',
            'Criado em'
        ];
    }
}
