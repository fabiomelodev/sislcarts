<?php

namespace App\Livewire;

use App\Models\ProductFeature;
use Livewire\Component;

class TableProductsFeatures extends Table
{
    public static string $single = 'Característica do Produto';

    public static string $model = ProductFeature::class;

    public static string $routeName = 'product-feature.index';

    public static string $view = 'table-products-features';

    public static function headings(): array
    {
        return [
            'Nome',
            'Criado em'
        ];
    }
}
