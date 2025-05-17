<?php

namespace App\Livewire\Form;

use Livewire\Component;

class SelectField extends Component
{
    public array $options;

    public string $name;

    public string $value;

    public string $current = 'Selecione';

    public function mount(array $options, $value = null)
    {
        $this->options = $options;

        if ($value) {
            $this->value = $value;
        }
    }

    public function setValue($value)
    {
        $index = (int) $value;

        $this->value = $value;

        $this->current = $this->options[$index];
    }

    public function render()
    {
        return view('livewire.form.select-field');
    }
}
