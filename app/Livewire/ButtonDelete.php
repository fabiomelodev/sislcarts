<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Livewire;

class ButtonDelete extends Component
{
    public $record;

    public function deleteRecord($id)
    {
        $this->dispatch('deleteRecord', $id);
    }

    public function render()
    {
        return view('livewire.button-delete');
    }
}
