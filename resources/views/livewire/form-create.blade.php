<form action="{{ route('type-service.store') }}" method="POST">
    @csrf

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
            id="name" />
        </div>

        <div class="w-full flex flex-col gap-1">
            <livewire:form.select-field label="Status" name="status" :options="\App\Enums\Status::values()" event="setStatus"/>
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
