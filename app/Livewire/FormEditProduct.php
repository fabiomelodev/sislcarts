<?php

namespace App\Livewire;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Model;

class FormEditProduct extends FormEdit
{
    public static string $view = 'form-edit-product';

    public string $brand = '';

    public string $value = '';

    public string $charge = '';

    public function mount(Model $record)
    {
        $this->name = $record->name;

        $this->brand = $record->brand;

        $this->value = $record->value;

        $this->charge = $record->charge;

        $this->status = $this->record->status_value;
    }

    public function update()
    {
        $this->validate();

        $status = $this->status == 1 ? Status::Active : Status::Inactive;

        $this->record->update([
            'name'   => $this->name,
            'brand'  => $this->brand,
            'value'  => $this->value,
            'charge' => $this->charge,
            'status' => $status
        ]);

        session()->flash('success', 'Atualizado com sucesso!');
    }
}
