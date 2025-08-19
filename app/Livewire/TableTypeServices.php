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

    public string $status = '';

    protected $listeners = ['deleteRecord' => 'delete', 'setStatus' => 'setStatus'];

    public static function headings(): array
    {
        return [
            'Nome',
            'Status',
            'Criado em'
        ];
    }

    #[On('setStatus')]
    public function setStatus($status)
    {
        dd('setStatus');

        $this->status = $status;
    }
}
