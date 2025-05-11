<?php

namespace App\Livewire;

use App\Livewire\Table;
use App\Models\Service;

class TableServices extends Table
{
    public static string $single = 'Serviço';

    public static string $model = Service::class;

    public static string $routeName = 'service.index';

    public static string $view = 'table-services';

    public static function headings(): array
    {
        return [
            'Nome',
            'Status',
            'Criado em'
        ];
    }
}
