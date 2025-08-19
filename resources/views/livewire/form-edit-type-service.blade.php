<form wire:submit="update">

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
            name="name"
            value="{{ $record->name }}" />
        </div>

        <div class="w-full flex flex-col gap-1">
            <livewire:form.select-field label="Status" name="status" :options="\App\Enums\Status::values()" value="{{ $record->status_value }}" />
        </div>

        <div class="w-full flex justify-center">
            <button
            class="shadow-lg rounded-lg text-sm font-bold text-center text-white bg-purple-400 hover:bg-purple-500 py-2 px-4"
            type="submit">
                Salvar
            </button>
        </div>
    </div>
</form>
