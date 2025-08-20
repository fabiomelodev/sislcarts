<?php

namespace App\Livewire;

use App\Enums\Status;
use Livewire\Attributes\On;
use Livewire\Component;

class FormCreate extends Component
{
    public static string $model = '';

    public static string $view = 'form-create';

    public static string $routeEdit = '';

    public static string $parameterEdit = 'record';

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

        $record = static::$model::create([
            'name'   => $this->name,
            'status' => $status
        ]);

        return redirect()->route(static::$routeEdit, [
            static::$parameterEdit => $record
        ]);
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
