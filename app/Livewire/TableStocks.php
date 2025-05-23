<?php

namespace App\Livewire;

use App\Models\Stock;
use Livewire\Component;

class TableStocks extends Table
{
    public static string $single = 'Estoque';

    public static string $model = Stock::class;

    public static string $routeName = 'stock.index';

    public static string $view = 'table-stocks';

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
