<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class TableProducts extends Table
{
    public static string $single = 'Produto';

    public static string $model = Product::class;

    public static string $routeName = 'product.index';

    public static string $view = 'table-products';

    public static function headings(): array
    {
        return [
            'Nome',
            'Marca',
            'Valor',
            'Cobrança',
            'Criado em'
        ];
    }
}
