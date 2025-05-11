<div class="w-full relative">
    @if(!$collections->isEmpty())
        <div class="flex justify-end items-center gap-4 py-4">

            <select
            class="h-8 border shadow-lg rounded-lg text-xs font-medium py-1 px-4"
            wire:model.live="orderColumn">
                <option value="created_at">Criado em</option>
            </select>

            <div class="flex gap-2">
                <button
                class="button-order {{ $this->order == 'asc' ? 'is-active' : '' }}"
                type="button"
                wire:click="orderByAsc"
                title="Acrescente">
                    <svg class="button-order-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M183.6 42.4C177.5 35.8 169 32 160 32s-17.5 3.8-23.6 10.4l-88 96c-11.9 13-11.1 33.3 2 45.2s33.3 11.1 45.2-2L128 146.3 128 448c0 17.7 14.3 32 32 32s32-14.3 32-32l0-301.7 32.4 35.4c11.9 13 32.2 13.9 45.2 2s13.9-32.2 2-45.2l-88-96zM320 320c0 17.7 14.3 32 32 32l50.7 0-73.4 73.4c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8l128 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-50.7 0 73.4-73.4c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8l-128 0c-17.7 0-32 14.3-32 32zM416 32c-12.1 0-23.2 6.8-28.6 17.7l-64 128-16 32c-7.9 15.8-1.5 35 14.3 42.9s35 1.5 42.9-14.3l7.2-14.3 88.4 0 7.2 14.3c7.9 15.8 27.1 22.2 42.9 14.3s22.2-27.1 14.3-42.9l-16-32-64-128C439.2 38.8 428.1 32 416 32zM395.8 176L416 135.6 436.2 176l-40.4 0z"/></svg>
                </button>

                <button
                class="button-order {{ $this->order == 'desc' ? 'is-active' : '' }}"
                type="button"
                wire:click="orderByDesc"
                title="Decrescente">
                    <svg class="button-order-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M183.6 469.6C177.5 476.2 169 480 160 480s-17.5-3.8-23.6-10.4l-88-96c-11.9-13-11.1-33.3 2-45.2s33.3-11.1 45.2 2L128 365.7 128 64c0-17.7 14.3-32 32-32s32 14.3 32 32l0 301.7 32.4-35.4c11.9-13 32.2-13.9 45.2-2s13.9 32.2 2 45.2l-88 96zM320 64c0-17.7 14.3-32 32-32l128 0c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9L429.3 160l50.7 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-128 0c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9L402.7 96 352 96c-17.7 0-32-14.3-32-32zm96 192c12.1 0 23.2 6.8 28.6 17.7l64 128 16 32c7.9 15.8 1.5 35-14.3 42.9s-35 1.5-42.9-14.3L460.2 448l-88.4 0-7.2 14.3c-7.9 15.8-27.1 22.2-42.9 14.3s-22.2-27.1-14.3-42.9l16-32 64-128c5.4-10.8 16.5-17.7 28.6-17.7zM395.8 400l40.4 0L416 359.6 395.8 400z"/></svg>
                </button>
            </div>
        </div>

        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        @foreach($this->headings() as $heading)
                            <th>{{ $heading }}</th>
                        @endforeach
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($collections as $collection)
                        <tr wire:key="budget-{{ $collection->id }}">
                            <td>
                                {{ $collection->name }}
                            </td>

                            <td>
                                {{ $collection->created_at->format('d/m/Y') }}
                            </td>

                            <td class="flex justify-end gap-4">
                                <x-table.button-edit :record="$collection" route="product-type.edit" />

                                <livewire:button-delete :record="$collection" :key="$collection->id"/>
                            </td>
                        </tr>
                        @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    @else
        <x-not-found-collections title="{{ static::$single }}"/>
    @endif

    <div wire:loading wire:target="orderColumn, orderByAsc, orderByDesc, delete" class="w-full h-full top-0 left-0 absolute z-50" style="filter:blur(3px)">
        Atualizando...
    </div>
</div>


