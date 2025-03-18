<x-layout.base>
    <x-slot name="title">Home</x-slot>

    <section class="w-full h-screen flex justify-center items-center bg-red-500 py-6">

        <div class="container h-full flex justify-center items-center">

            <div class="w-8/12 h-full">
                <div class="h-full rounded-lg shadow-lg flex justify-center items-end bg-gray-100 p-4">

                    <div class="flex justify-center">
                        <a
                        class="transition hover:scale-90 rounded-lg shadow-lg font-bold text-center text-white bg-purple-400 py-2 px-6"
                        href="{{ route('budget.create') }}">
                            criar orçamento
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout.base>
