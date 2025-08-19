<?php

namespace App\Livewire;

use App\Enums\Status;
use App\Models\TypeService;
use Livewire\Attributes\On;

class FormCreateTypeService extends FormCreate
{
    public static string $view = 'form-create-type-service';

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

    public function save()
    {
        $this->validate();

        $status = $this->status == 1 ? Status::Active : Status::Inactive;

        $typeService = TypeService::create([
            'name'   => $this->name,
            'status' => $status
        ]);

        return redirect()->route('type-service.edit', [
            'typeService' => $typeService
        ]);
    }

    #[On('setStatus')]
    public function setStatus($status)
    {
        $this->status = $status;
    }
}
