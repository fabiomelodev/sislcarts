<?php

namespace App\Livewire;

use App\Enums\Status;
use App\Models\Customer;

class FormCreateCustomer extends FormCreate
{
    public static string $view = 'form-create-customer';

    public static string $model = Customer::class;

    public static string $routeEdit = 'customer.edit';

    public static string $parameterEdit = 'customer';

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

    public function save()
    {
        $this->validate();

        $status = $this->status == 1 ? Status::Active : Status::Inactive;

        $record = static::$model::create([
            'name'         => $this->name,
            'phone'        => $this->phone,
            'contact_type' => $this->contactType,
            'status'       => $status
        ]);

        return redirect()->route(static::$routeEdit, [
            static::$parameterEdit => $record
        ]);
    }
}
