<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\Attributes\On;

class Table extends Component
{
    public Collection $collections;

    protected static string $model = '';

    protected static string $routeName = '';

    public static string $single;

    public static string $view;

    public string $orderColumn = 'created_at';

    public string $order = 'desc';

    protected $listeners = ['deleteRecord' => 'delete'];

    public function mount()
    {
        $this->updatedTableQuery();
    }

    public static function headings(): array
    {
        return [];
    }

    public function updatedTableQuery()
    {
        $this->collections = static::$model::orderBy($this->orderColumn, $this->order)->hasUser()->get();
    }

    public function orderByAsc()
    {
        $this->order = 'asc';

        $this->updatedTableQuery();
    }

    public function orderByDesc()
    {
        $this->order = 'desc';

        $this->updatedTableQuery();
    }

    #[On('deleteRecord')]
    public function delete($id)
    {
        $record = static::$model::find($id);

        if ($record) {
            $record->delete();
        }

        $this->updatedTableQuery();

        return redirect()
            ->route(static::$routeName, $record)
            ->with('success', static::$single . ' deletado com sucesso!');
    }

    public function render()
    {
        return view('livewire.' . static::$view, [
            'collections' => $this->collections
        ]);
    }
}
