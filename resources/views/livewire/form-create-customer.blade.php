<form wire:submit="save">

    <div class="flex flex-wrap gap-4 justify-center">

        {{-- <div class="w-4/12 flex justify-center">
            <livewire:photo-input-field />
        </div> --}}

        <div class="w-full flex flex-col gap-1">

            <label
            class="text-sm font-medium"
            for="name">
                Nome:
            </label>

            <input
            class="input-field"
            type="text"
            wire:model="name" />

            @error('name')
                <span class="error">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="w-full flex flex-col gap-1">

            <label
            class="text-sm font-medium"
            for="phone">
                Telefone:
            </label>

            <input
            class="input-field"
            type="phone"
            wire:model="phone" />

            @error('phone')
                <span class="error">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="w-full flex flex-col gap-1">
            <label
            class="text-sm font-medium"
            for="contact_type">
                Por onde entrou em contato:
            </label>

            <select
            class="input-field"
            wire:model="contactType"
            id="contact_type">
                <option value="0">Selecione</option>
                <option value="Whatsapp">Whatsapp</option>
                <option value="Recomendação">Recomendação</option>
            </select>

            @error('contact_type')
                <span class="error">
                    {{ $message }}
                </span>
            @enderror
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
