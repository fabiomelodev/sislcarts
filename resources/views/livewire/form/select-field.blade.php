<div
class="select-field"
x-data="{ openOptions: false }">
    <p class="select-field-label">
        Status:
    </p>

    <input type="hidden" name="{{ $name }}" value="{{ $value }}" />

    <div
    class="select-field-wrapper"
    x-on:click="openOptions = !openOptions">
        <p class="select-field-value">
            {{ $current }}
        </p>

        <div class="select-field-icon-wrapper">
            <div class="select-field-icon" x-bind:class="openOptions == false ? 'is-active' : '' "></div>

            <div class="select-field-icon" x-bind:class="openOptions == true ? 'is-active' : '' "></div>
        </div>
    </div>

    <div
    class="select-field-items"
    x-show="openOptions"
    x-transition:enter="transition duration-500"
    x-transition:enter-start="-translate-y-10 opacity-0"
    x-transition:enter-end="translate-y-2 opacity-100"
    x-transition:leave="transition duration-500"
    x-transition:leave-start="translate-y-2 opacity-100"
    x-transition:leave-end="-translate-y-10 opacity-0">
        @foreach($options as $key => $option)
            <div
            class="select-field-item"
            x-on:click="openOptions = false"
            wire:click="setValue('{{ $key }}')">
                <p class="select-field-item-title">
                    {{ $option }}
                </p>
            </div>
        @endforeach
    </div>
</div>
