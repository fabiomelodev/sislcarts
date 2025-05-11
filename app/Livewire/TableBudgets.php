<?php

namespace App\Livewire;

use App\Livewire\Table;
use App\Models\Budget;

class TableBudgets extends Table
{
    public static string $single = 'Orçamento';

    public static string $model = Budget::class;

    public static string $routeName = 'budget.index';

    public static string $view = 'table-budgets';

    public static function headings(): array
    {
        return [
            'Cliente',
            'Serviço',
            'Valor',
            'Criado em'
        ];
    }
}
