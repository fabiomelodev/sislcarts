<?php

namespace App\Livewire;

use App\Livewire\Table;
use App\Models\Service;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;

class TableServices extends Table
{
    public static string $single = 'Serviço';

    protected $listeners = ['deleteRecord' => 'delete'];

    public function mount($collections)
    {
        static::$collections = Service::all();
    }

    public static function headings(): array
    {
        return [
            'Nome',
            'Criado em'
        ];
    }

    public static function collections(): Collection
    {
        return Service::orderBy('created_at', 'DESC')->get();
    }

    #[On('deleteRecord')]
    public function delete($id)
    {
        $service = Service::find($id);

        if ($service) {
            $service->delete();
        }

        static::$collections = Service::all();

        return redirect()
            ->route('service.index', $service->id)
            ->with('success', 'Serviço deletado com sucesso!');
    }

    public function render()
    {
        return view('livewire.table-services');
    }
}
