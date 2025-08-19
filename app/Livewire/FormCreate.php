<?php

namespace App\Livewire;

use Livewire\Component;

class FormCreate extends Component
{
    public static string $view;

    public function save() {}

    public function render()
    {
        return view('livewire.' . static::$view);
    }
}
