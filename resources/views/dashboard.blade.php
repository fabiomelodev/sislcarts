<x-layout.base>
    <x-slot name="title">Dashboard</x-slot>

    @if(session('success'))
        <x-notifications.success message="{{ session('success') }}"/>
    @endif

    <section class="w-full h-screen flex justify-center items-center pt-6 px-6">

        <div class="container h-full flex justify-center items-center">

            <div class="w-8/12">

                <div class="mb-4">

                    <h2 class="text-3xl font-bold">
                        Orçamentos
                    </h2>
                </div>

                <div class="grid grid-cols-3 grid-rows-3 gap-4">

                     <div class="border shadow-lg rounded-lg relative bg-yellow-500 p-4">

                        <p class="text-lg font-bold text-white">
                            Em Espera
                        </p>

                        <p class="text-5xl font-bold text-white">
                            30
                        </p>

                        <a
                        class="w-6 h-6 bottom-2 right-2 transition hover:scale-90 border shadow-lg rounded-md absolute flex justify-center items-center bg-white"
                        href="#">
                            <svg class="w-4 h-4 fill-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M40 48C26.7 48 16 58.7 16 72l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24L40 48zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L192 64zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-288 0zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-288 0zM16 232l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24l-48 0c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24l-48 0z"/></svg>
                        </a>
                     </div>

                     <div class="border shadow-lg rounded-lg relative bg-green-500 p-4">

                        <p class="text-lg font-bold text-white">
                            Em Andamento
                        </p>

                        <p class="text-5xl font-bold text-white">
                            30
                        </p>

                        <a
                        class="w-6 h-6 bottom-2 right-2 transition hover:scale-90 border shadow-lg rounded-md absolute flex justify-center items-center bg-white"
                        href="#">
                            <svg class="w-4 h-4 fill-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M40 48C26.7 48 16 58.7 16 72l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24L40 48zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L192 64zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-288 0zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-288 0zM16 232l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24l-48 0c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24l-48 0z"/></svg>
                        </a>
                     </div>

                     <div class="border shadow-lg rounded-lg relative bg-blue-500 p-4">

                        <p class="text-lg font-bold text-white">
                            Concluído
                        </p>

                        <p class="text-5xl font-bold text-white">
                            30
                        </p>

                        <a
                        class="w-6 h-6 bottom-2 right-2 transition hover:scale-90 border shadow-lg rounded-md absolute flex justify-center items-center bg-white"
                        href="#">
                            <svg class="w-4 h-4 fill-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M40 48C26.7 48 16 58.7 16 72l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24L40 48zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L192 64zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-288 0zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-288 0zM16 232l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24l-48 0c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24l-48 0z"/></svg>
                        </a>
                     </div>
                </div>
            </div>
        </div>
    </section>
</x-layout.base>
