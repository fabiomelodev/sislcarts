<?php

namespace App\Livewire;

use App\Livewire\Table;
use App\Models\Customer;

class TableCustomers extends Table
{
    public static string $single = 'Cliente';

    public static string $model = Customer::class;

    public static string $routeName = 'customer.index';

    public static string $view = 'table-customers';

    public static function headings(): array
    {
        return [
            'Nome',
            'Status',
            'Contato',
            'Encomenda(s)',
            'Criado em'
        ];
    }
}
