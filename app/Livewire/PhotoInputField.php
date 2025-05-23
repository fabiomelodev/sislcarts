<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;

class PhotoInputField extends Component
{
    use WithFileUploads;

    public $photo;

    public $photoIsValid = false;

    public function updatedPhoto()
    {
        $this->resetValidation('photo');

        $this->photoIsValid = false;

        try {
            $this->validateOnly('photo', [
                'photo' => [
                    'required',
                    'file',
                    'image',
                    'mimes:jpg,jpeg,png,gif,webp',
                    'max:2048',
                ],
            ]);

            $this->photoIsValid = true;
        } catch (\Illuminate\Validation\ValidationException $e) {
        }
    }

    public function render()
    {
        return view('livewire.photo-input-field');
    }
}
