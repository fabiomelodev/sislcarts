<?php

namespace App\Livewire;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Model;
use Livewire\Attributes\On;
use Livewire\Component;

class FormEdit extends Component
{
    public static string $view = 'form-edit';

    public Model $record;

    public string $name = '';

    public string $status = '';

    protected $rules = [
        'name'   => 'required|string|min:1',
        'status' => 'required|string|min:1'
    ];

    protected $messages = [
        'name.required'   => 'O nome é obrigatório.',
        'status.required' => 'O status é obrigatório.'
    ];

    public function mount(Model $record)
    {
        $this->record = $record;

        $this->name = $this->record->name;

        $this->status = $this->record->status_value;
    }

    public function update()
    {
        $this->validate();

        $status = $this->status == 1 ? Status::Active : Status::Inactive;

        $this->record->update([
            'name'   => $this->name,
            'status' => $status
        ]);

        session()->flash('success', 'Atualizado com sucesso!');
    }

    #[On('setStatus')]
    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function render()
    {
        return view('livewire.' . static::$view);
    }
}
