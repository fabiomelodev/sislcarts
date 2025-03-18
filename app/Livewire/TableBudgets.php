<?php

namespace App\Livewire;

use App\Livewire\Table;
use App\Models\Budget;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;

class TableBudgets extends Table
{
    public static string $single = 'Orçamento';

    protected $listeners = ['deleteRecord' => 'delete'];

    public function mount($collections)
    {
        static::$collections = Budget::all();
    }

    public static function headings(): array
    {
        return [
            'Cliente',
            'Serviço',
            'Valor',
            'Criado em'
        ];
    }

    public static function collections(): Collection
    {
        return Budget::orderBy('created_at', 'DESC')->get();
    }

    #[On('deleteRecord')]
    public function delete($id)
    {
        $budget = Budget::find($id);

        if ($budget) {
            $budget->delete();
        }

        static::$collections = Budget::all();

        return redirect()
            ->route('budget.index', $budget->id)
            ->with('success', 'Orçamento deletado com sucesso!');
    }

    public function render()
    {
        return view('livewire.table-budgets');
    }
}
