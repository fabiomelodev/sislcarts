@props([
    'name' => null
])

@php
    $isActive = $name->value == \App\Enums\Status::Active->value;
@endphp

<div class="rounded-md inline-block {{ $isActive ? 'bg-green-500' : 'bg-red-500' }} p-1">
    <p class="text-xs font-semibold text-center text-white">
        {{ $name->label() }}
    </p>
</div>
