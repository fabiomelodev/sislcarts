<div>
    <div class="space-y-2">
        @foreach ($features as $index => $feature)
            <div class="flex items-end space-x-2">

                <div class="w-5/12">
                    <label class="text-sm font-medium">
                        Atributo:
                    </label>

                    <input
                    class="input-field"
                    type="text"
                    wire:model.live="features.{{ $index }}.attribute" />
                </div>

                <div class="w-5/12">
                    <label class="text-sm font-medium">
                        Valor:
                    </label>

                    <input
                    class="input-field"
                    type="text"
                    wire:model.live="features.{{ $index }}.value" />

                    <input type="hidden" name="features" value="{{ json_encode($features) }}">
                </div>

                <div class="w-2/12 flex items-end">
                    <button
                    class="rounded text-sm font-medium text-white bg-red-500 py-2 px-3"
                    type="button"
                    wire:click="removeFeature({{ $index }})">
                        Remover
                    </button>
                </div>
            </div>
        @endforeach
    </div>

    <div class="flex justify-center">
        <button
        class="rounded text-sm font-medium text-center text-white bg-blue-500 mt-3 py-2 px-4"
        type="button"
        wire:click="addFeature()">
        + Característica
        </button>
    </div>
</div>
