<?php

namespace App\Livewire\Form;

use Livewire\Component;

class SelectField extends Component
{
    public string $label;

    public array $options;

    public string $name;

    public string $value;

    public string $current = 'Selecione';

    public string $event;

    public function mount($label = null, array $options, $value = null, $event = null)
    {
        if ($label) {
            $this->label = $label;
        }

        $this->options = $options;

        if ($value) {
            $this->value = $value;

            $this->current = $this->options[$value];
        }

        if ($event) {
            $this->event = $event;
        }
    }

    public function setValue($value)
    {
        $index = (int) $value;

        $this->value = $value;

        $this->current = $this->options[$index];
    }

    public function handleClick(string $key, string $event)
    {
        $this->setValue($key);

        $this->dispatch($event, $key);
    }

    public function render()
    {
        return view('livewire.form.select-field');
    }
}
