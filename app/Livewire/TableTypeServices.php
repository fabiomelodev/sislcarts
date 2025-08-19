<?php

namespace App\Livewire;

use App\Livewire\Table;
use App\Models\TypeService;
use Livewire\Attributes\On;

class TableTypeServices extends Table
{
    public static string $single = 'Tipo de serviço';

    public static string $model = TypeService::class;

    public static string $routeName = 'type-service.index';

    public static string $view = 'table-type-services';

    protected $listeners = ['deleteRecord' => 'delete'];

    public static function headings(): array
    {
        return [
            'Nome',
            'Status',
            'Criado em'
        ];
    }
}
