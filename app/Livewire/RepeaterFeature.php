<?php

namespace App\Livewire;

use Livewire\Component;

class RepeaterFeature extends Component
{
    public $features = [];

    public function mount()
    {
        $this->features = [['attribute' => '', 'value' => '']];
    }

    public function addFeature()
    {
        $this->features[] = [
            'attribute' => '',
            'value'     => ''
        ];
    }

    public function removeFeature($index)
    {
        unset($this->features[$index]);

        $this->features = array_values($this->features);
    }

    public function render()
    {
        return view('livewire.repeater-feature');
    }
}
