@props([
    'record',
    'route'
])

<div x-data="{ showBoxDelete: false }">
    <button
    class="table-button-action table-button-action-delete"
    type="button"
    x-on:click="showBoxDelete = true">
        <span style="font-size:0">
            Excluir
        </span>

        <svg class="table-button-action-icon table-button-action-icon-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0L284.2 0c12.1 0 23.2 6.8 28.6 17.7L320 32l96 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 96C14.3 96 0 81.7 0 64S14.3 32 32 32l96 0 7.2-14.3zM32 128l384 0 0 320c0 35.3-28.7 64-64 64L96 512c-35.3 0-64-28.7-64-64l0-320zm96 64c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16z"/></svg>
    </button>

    <div
    class="w-full h-full top-0 left-0 fixed flex justify-center items-center bg-black/10"
    x-show="showBoxDelete">

        <div class="container flex justify-center">

            <div class="w-6/12">

                <div class="border shadow-lg rounded-lg flex flex-col justify-center items-center gap-6 bg-white p-6">

                    <p class="text-lg font-semibold">
                        Deseja excluir esse item?
                    </p>

                    <div class="flex gap-6">
                        <button
                        class="border-2 border-red-500 rounded-lg font-semibold text-red-500 hover:text-white hover:bg-red-500 py-2 px-4"
                        type="button"
                        wire:click="deleteRecord({{ $record->id }})">
                            Deletar
                        </button>

                        <button
                        class="border-2 border-indigo-500 rounded-lg font-semibold text-indigo-500 hover:text-white hover:bg-indigo-500 py-2 px-4"
                        type="button"
                        x-on:click="showBoxDelete = false">
                            Cancelar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
