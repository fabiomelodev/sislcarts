<?php

namespace App\Livewire;

use App\Models\TypeService;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class FormEditTypeService extends Component
{
    public TypeService $record;

    public function mount(TypeService $record)
    {
        $this->record = $record;
    }

    public function render()
    {
        return view('livewire.form-edit-type-service');
    }
}
