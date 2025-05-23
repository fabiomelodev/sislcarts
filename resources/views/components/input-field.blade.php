@props([
    'name',
    'label'      => null,
    'value'      => null,
    'prefix'     => null,
    'helperText' => null
])

<div class="flex flex-col gap-1">
    @if($label)
        <label
        class="text-sm font-medium"
        for="{{ $name }}">
            {{ $label }}:
        </label>
    @endif

    @if($prefix == null)
        <input
        class="input-field"
        type="text"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{ $value }}" />
    @endif

    @if($prefix)
        <div class="rounded-lg overflow-hidden relative">
            <span class="w-8 h-full top-0 left-0 absolute flex justify-center items-center text-xs font-semibold text-white bg-gray-800">
                {{ $prefix }}
            </span>

            <input
            class="input-field input-field-value"
            type="value"
            id="{{ $name }}"
            name="{{ $name }}"
            value="{{ $value }}" />
        </div>
    @endif

    @if($helperText)
        <p class="text-xs font-normal text-gray-500">
            {{ $helperText }}
        </p>
    @endif
</div>
