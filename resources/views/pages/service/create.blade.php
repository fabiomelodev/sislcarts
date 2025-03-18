<x-layout.base>
    <x-slot name="title">Serviços</x-slot>

    <section class="relative pt-14">

        <div class="container flex justify-center">

            <div class="lg:w-8/12">

                <div class="border shadow-lg rounded-lg bg-gray-100 p-4">

                    <div class="border-b border-purple-600/20 flex justify-between py-2">
                        <div class="flex items-center">
                            <h1
                            class="text-2xl font-bold"
                            style="line-height:100%">
                                Serviço | Criar novo
                            </h1>
                        </div>

                        <div>
                            <a
                            class="button-action button-action-create"
                            href="{{ route('service.index') }}">
                                Listagem
                            </a>
                        </div>
                    </div>

                    <div class="mt-6">
                        <form action="{{ route('service.store') }}" method="POST">
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
                                    name="name" />
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
                    </div>
                </div>
            </div>
        </div>

        @if(isset($message))
            <div
            class="top-14 right-4 border shadow-lg rounded-lg absolute flex justify-center items-center bg-red-500 p-2"
            x-data="{ showNotification: {{ isset($message) ? 'true' : 'false' }}}"
            x-show="showNotification"
            x-transition:enter="transition duration-500 delay-2000"
            x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0">
                <p class="text-sm font-bold text-center text-white">
                    {{ $message }}
                </p>
            </div>
        @endif
    </section>
</x-layout.base>
