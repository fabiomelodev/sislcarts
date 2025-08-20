<?php

namespace App\Livewire;

use App\Models\TypeProduct;

class TableTypeProduct extends Table
{
    public static string $single = 'Tipo de Produto';

    public static string $model = TypeProduct::class;

    public static string $routeName = 'type-product.index';

    public static string $view = 'table-type-product';

    public static function headings(): array
    {
        return [
            'Nome',
            'Status',
            'Criado em'
        ];
    }
}
