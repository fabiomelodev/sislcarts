<?php

namespace App\Livewire;

use App\Enums\Status;
use App\Models\TypeProduct;
use Livewire\Attributes\On;

class FormCreateTypeProduct extends FormCreate
{
    public static string $model = TypeProduct::class;

    public static string $routeEdit = 'type-product.edit';
}
