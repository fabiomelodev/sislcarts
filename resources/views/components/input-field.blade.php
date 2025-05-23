@props([
    'label' => null,
    'name',
    'value' => null
])

<div class="flex flex-col gap-1">
    @if($label)
        <label
        class="text-sm font-medium"
        for="{{ $name }}">
            {{ $label }}:
        </label>
    @endif

    <input
    class="input-field"
    type="text"
    name="{{ $name }}"
    value="{{ $value }}" />
</div>
