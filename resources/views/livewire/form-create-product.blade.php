<form wire:submit="save">

    <div class="flex flex-wrap gap-4">

        <div class="w-full flex flex-col gap-1">
            <label
            class="text-sm font-medium"
            for="name">
                Nome:
            </label>

            <input
            class="input-field"
            type="text"
            wire:model="name"
            id="name" />
        </div>

        <div class="w-full flex flex-col gap-1">
            <label
            class="text-sm font-medium"
            for="brand">
                Marca:
            </label>

            <input
            class="input-field"
            type="text"
            wire:model="brand"
            id="brand" />
        </div>

        <div class="w-full">
            <label
            class="text-sm font-medium"
            for="value">
                Valor:
            </label>

            <input
            class="input-field"
            type="text"
            wire:model="value"
            id="value"
            prefix="R$" />
        </div>

        <div class="w-full">
            <label
            class="text-sm font-medium"
            for="charge">
                Cobrança:
            </label>

            <input
            class="input-field"
            type="text"
            wire:model="charge"
            id="charge"
            prefix="R$"
            helperText="Valor a ser cobrado no orçamento!" />
        </div>

        <div class="w-full flex flex-col gap-1">
            <livewire:form.select-field label="Status" name="status" :options="\App\Enums\Status::values()" value="{{ $status }}" event="setStatus" />

            @error('status')
                <span class="error">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="w-full flex justify-center">
            <button
            class="shadow-lg rounded-lg text-sm font-bold text-center text-white bg-purple-400 hover:bg-purple-500 py-2 px-4"
            type="submit">
                Criar
            </button>
        </div>
    </div>
</form>
