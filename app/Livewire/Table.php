<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Table extends Component
{
    public static Collection $collections;

    public static string $single;

    public function mount($collections)
    {
        static::$collections = $collections;
    }

    public static function headings(): array
    {
        return [];
    }

    public static function collections(): Collection
    {
        return static::$collections;
    }

    // public static function delete($id) {}

    // public function render()
    // {
    //     $routeEdit = $this->route . '.edit';

    //     $routeDestroy = $this->route . '.destroy';

    //     return view('livewire.table', [
    //         'headings'     => $this->headings,
    //         'collections'  => $this->collections,
    //         'routeEdit'    => $routeEdit,
    //         'routeDestroy' => $routeDestroy
    //     ]);
    // }
}
