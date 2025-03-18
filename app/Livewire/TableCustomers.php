<?php

namespace App\Livewire;

use App\Livewire\Table;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;

class TableCustomers extends Table
{
    public static string $single = 'Cliente';

    protected $listeners = ['deleteRecord' => 'delete'];

    public function mount($collections)
    {
        static::$collections = Customer::all();
    }

    public static function headings(): array
    {
        return [
            'Nome',
            'Contato',
            'Encomenda(s)',
            'Criado em'
        ];
    }

    public static function collections(): Collection
    {
        return Customer::orderBy('created_at', 'DESC')->get();
    }

    #[On('deleteRecord')]
    public function delete($id)
    {
        $customer = Customer::find($id);

        if ($customer) {
            $customer->delete();
        }

        static::$collections = Customer::all();

        return redirect()
            ->route('customer.index', $customer->id)
            ->with('success', 'Cliente deletado com sucesso!');
        // session()->flash('message', 'Cliente deletado com sucesso.');
    }

    public function render()
    {
        return view('livewire.table-customers');
    }
}
