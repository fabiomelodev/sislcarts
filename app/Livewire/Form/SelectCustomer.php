<?php

namespace App\Livewire\Form;

use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SelectCustomer extends Component
{
    public string $label;

    public array $options;

    public string $name;

    public string $value;

    public string $current = 'Selecione';

    public string $event;

    public function getCustomers()
    {
        return Customer::where('user_id', Auth::user()->id)->get();
    }

    public function setValue($value)
    {
        $id = (int) $value;

        $customer = Customer::find($id);

        $this->current = $customer->name;
    }

    public function setCustomer(string $value)
    {
        $this->setValue($value);

        $this->dispatch('setCustomer', $value);
    }

    public function render()
    {
        return view('livewire.form.select-customer');
    }
}
