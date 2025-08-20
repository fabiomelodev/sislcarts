<?php

namespace App\Livewire;

use App\Models\Product;

class FormCreateProduct extends FormCreate
{
    public static string $view = 'form-create-product';

    public static string $routeEdit = 'product.edit';

    public static string $parameterEdit = 'product';

    public string $brand = '';

    public string $value = '';

    public string $charge = '';

    protected $rules = [
        'name'   => 'required|string|min:1',
        'brand'  => 'required|string|min:1',
        'value'  => 'required|string|min:1',
        'charge' => 'required|string|min:1'
    ];

    protected $messages = [
        'name.required'   => 'O nome é obrigatório.',
        'brand.required'  => 'A marca é obrigatória.',
        'value.required'  => 'O valor é obrigatório.',
        'charge.required' => 'A taxa é obrigatória.'
    ];

    public function save()
    {
        $this->validate();

        $record = Product::create([
            'name'   => $this->name,
            'brand'  => $this->brand,
            'value'  => $this->value,
            'charge' => $this->charge,
        ]);

        return redirect()->route(static::$routeEdit, [
            static::$parameterEdit => $record
        ]);
    }
}
