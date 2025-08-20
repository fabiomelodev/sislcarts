<?php

namespace App\Livewire;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Model;

class FormEditCustomer extends FormEdit
{
    public static string $view = 'form-edit-customer';

    public string $photo = '';

    public string $phone = '';

    public string $contactType = '';

    protected $rules = [
        'name'        => 'required|string|min:1',
        'photo'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        'phone'       => 'required|string|min:1',
        'contactType' => 'required|string|min:1',
        'status'      => 'required|string|min:1'
    ];

    protected $messages = [
        'name.required'        => 'O nome é obrigatório.',
        'phone.required'       => 'O telefone é obrigatório.',
        'contactType.required' => 'O tipo de contato é obrigatório.',
        'status.required'      => 'O status é obrigatório.'
    ];

    public function mount(Model $record)
    {
        $this->record = $record;

        $this->name = $this->record->name;

        $this->phone = $this->record->phone;

        $this->contactType = $this->record->contact_type;

        $this->status = $this->record->status_value;
    }

    public function update()
    {
        $this->validate();

        $status = $this->status == 1 ? Status::Active : Status::Inactive;

        $this->record->update([
            'name'         => $this->name,
            'phone'        => $this->phone,
            'contact_type' => $this->contactType,
            'status'       => $status
        ]);

        session()->flash('success', 'Atualizado com sucesso!');
    }
}
