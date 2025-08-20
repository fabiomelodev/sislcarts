<header
class="w-full h-10 top-0 left-0 fixed flex justify-center items-center bg-purple-800 z-50"
x-data="{ openMenuWrapper: false, openMenu: false }">

    <aside class="w-56 h-full top-0 left-0 fixed pt-10">

        <div class="w-full h-full flex flex-col justify-between bg-gray-300 p-4">

            <div>
                <div class="relative flex justify-center mt-4 mb-2">

                    <div class="w-full h-[1px] top-1/2 left-0 -translate-y-1/2 absolute bg-purple-800"></div>

                    <p class="relative inline-block text-sm font-bold text-center text-purple-800 bg-gray-300 px-2">
                        Principal
                    </p>
                </div>

                <ul class="border shadow-md rounded-md overflow-hidden flex flex-col bg-white">
                    <li class="border-b">
                        <a
                        class="flex items-center gap-2 text-sm font-semibold text-purple-800 hover:text-white bg-white hover:bg-purple-800 py-3 px-4"
                        href="{{ route('budget.index') }}">

                            <svg class="w-4 h-4 fill-purple-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M58.9 42.1c3-6.1 9.6-9.6 16.3-8.7L320 64 564.8 33.4c6.7-.8 13.3 2.7 16.3 8.7l41.7 83.4c9 17.9-.6 39.6-19.8 45.1L439.6 217.3c-13.9 4-28.8-1.9-36.2-14.3L320 64 236.6 203c-7.4 12.4-22.3 18.3-36.2 14.3L37.1 170.6c-19.3-5.5-28.8-27.2-19.8-45.1L58.9 42.1zM321.1 128l54.9 91.4c14.9 24.8 44.6 36.6 72.5 28.6L576 211.6l0 167c0 22-15 41.2-36.4 46.6l-204.1 51c-10.2 2.6-20.9 2.6-31 0l-204.1-51C79 419.7 64 400.5 64 378.5l0-167L191.6 248c27.8 8 57.6-3.8 72.5-28.6L318.9 128l2.2 0z"/></svg>

                            Orçamentos
                        </a>
                    </li>

                    <li class="border-b">
                        <a
                        class="flex items-center gap-2 text-sm font-semibold text-purple-800 hover:text-white bg-white hover:bg-purple-800 py-2 px-4"
                        href="{{ route('service.index') }}">

                            <svg class="w-4 h-4 fill-purple-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M58.9 42.1c3-6.1 9.6-9.6 16.3-8.7L320 64 564.8 33.4c6.7-.8 13.3 2.7 16.3 8.7l41.7 83.4c9 17.9-.6 39.6-19.8 45.1L439.6 217.3c-13.9 4-28.8-1.9-36.2-14.3L320 64 236.6 203c-7.4 12.4-22.3 18.3-36.2 14.3L37.1 170.6c-19.3-5.5-28.8-27.2-19.8-45.1L58.9 42.1zM321.1 128l54.9 91.4c14.9 24.8 44.6 36.6 72.5 28.6L576 211.6l0 167c0 22-15 41.2-36.4 46.6l-204.1 51c-10.2 2.6-20.9 2.6-31 0l-204.1-51C79 419.7 64 400.5 64 378.5l0-167L191.6 248c27.8 8 57.6-3.8 72.5-28.6L318.9 128l2.2 0z"/></svg>

                            Serviços
                        </a>
                    </li>

                    <li>
                        <a
                        class="flex items-center gap-2 text-sm font-semibold text-purple-800 hover:text-white bg-white hover:bg-purple-800 py-2 px-4"
                        href="{{ route('customer.index') }}">

                            <svg class="w-4 h-4 fill-purple-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M58.9 42.1c3-6.1 9.6-9.6 16.3-8.7L320 64 564.8 33.4c6.7-.8 13.3 2.7 16.3 8.7l41.7 83.4c9 17.9-.6 39.6-19.8 45.1L439.6 217.3c-13.9 4-28.8-1.9-36.2-14.3L320 64 236.6 203c-7.4 12.4-22.3 18.3-36.2 14.3L37.1 170.6c-19.3-5.5-28.8-27.2-19.8-45.1L58.9 42.1zM321.1 128l54.9 91.4c14.9 24.8 44.6 36.6 72.5 28.6L576 211.6l0 167c0 22-15 41.2-36.4 46.6l-204.1 51c-10.2 2.6-20.9 2.6-31 0l-204.1-51C79 419.7 64 400.5 64 378.5l0-167L191.6 248c27.8 8 57.6-3.8 72.5-28.6L318.9 128l2.2 0z"/></svg>

                            Clientes
                        </a>
                    </li>
                </ul>

                <div class="relative flex justify-center mt-4 mb-2">

                    <div class="w-full h-[1px] top-1/2 left-0 -translate-y-1/2 absolute bg-purple-800"></div>

                    <p class="relative inline-block text-sm font-bold text-center text-purple-800 bg-gray-300 px-2">
                        Produtos
                    </p>
                </div>

                <ul class="border shadow-md rounded-md overflow-hidden flex flex-col bg-white">
                    <li class="border-b">
                        <a
                        class="flex items-center gap-2 text-sm font-semibold text-purple-800 hover:text-white bg-white hover:bg-purple-800 py-2 px-4"
                        href="{{ route('product.index') }}">

                            <svg class="w-4 h-4 fill-purple-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M58.9 42.1c3-6.1 9.6-9.6 16.3-8.7L320 64 564.8 33.4c6.7-.8 13.3 2.7 16.3 8.7l41.7 83.4c9 17.9-.6 39.6-19.8 45.1L439.6 217.3c-13.9 4-28.8-1.9-36.2-14.3L320 64 236.6 203c-7.4 12.4-22.3 18.3-36.2 14.3L37.1 170.6c-19.3-5.5-28.8-27.2-19.8-45.1L58.9 42.1zM321.1 128l54.9 91.4c14.9 24.8 44.6 36.6 72.5 28.6L576 211.6l0 167c0 22-15 41.2-36.4 46.6l-204.1 51c-10.2 2.6-20.9 2.6-31 0l-204.1-51C79 419.7 64 400.5 64 378.5l0-167L191.6 248c27.8 8 57.6-3.8 72.5-28.6L318.9 128l2.2 0z"/></svg>

                            Produtos
                        </a>
                    </li>

                    <li class="border-b">
                        <a
                        class="flex items-center gap-2 text-sm font-semibold text-purple-800 hover:text-white bg-white hover:bg-purple-800 py-2 px-4"
                        href="{{ route('type-product.index') }}">

                            <svg class="w-4 h-4 fill-purple-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M58.9 42.1c3-6.1 9.6-9.6 16.3-8.7L320 64 564.8 33.4c6.7-.8 13.3 2.7 16.3 8.7l41.7 83.4c9 17.9-.6 39.6-19.8 45.1L439.6 217.3c-13.9 4-28.8-1.9-36.2-14.3L320 64 236.6 203c-7.4 12.4-22.3 18.3-36.2 14.3L37.1 170.6c-19.3-5.5-28.8-27.2-19.8-45.1L58.9 42.1zM321.1 128l54.9 91.4c14.9 24.8 44.6 36.6 72.5 28.6L576 211.6l0 167c0 22-15 41.2-36.4 46.6l-204.1 51c-10.2 2.6-20.9 2.6-31 0l-204.1-51C79 419.7 64 400.5 64 378.5l0-167L191.6 248c27.8 8 57.6-3.8 72.5-28.6L318.9 128l2.2 0z"/></svg>

                            Tipos de Produtos
                        </a>
                    </li>

                    <li class="border-b">
                        <a
                        class="flex items-center gap-2 text-sm font-semibold text-purple-800 hover:text-white bg-white hover:bg-purple-800 py-2 px-4"
                        href="{{ route('type-service.index') }}">

                            <svg class="w-4 h-4 fill-purple-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M58.9 42.1c3-6.1 9.6-9.6 16.3-8.7L320 64 564.8 33.4c6.7-.8 13.3 2.7 16.3 8.7l41.7 83.4c9 17.9-.6 39.6-19.8 45.1L439.6 217.3c-13.9 4-28.8-1.9-36.2-14.3L320 64 236.6 203c-7.4 12.4-22.3 18.3-36.2 14.3L37.1 170.6c-19.3-5.5-28.8-27.2-19.8-45.1L58.9 42.1zM321.1 128l54.9 91.4c14.9 24.8 44.6 36.6 72.5 28.6L576 211.6l0 167c0 22-15 41.2-36.4 46.6l-204.1 51c-10.2 2.6-20.9 2.6-31 0l-204.1-51C79 419.7 64 400.5 64 378.5l0-167L191.6 248c27.8 8 57.6-3.8 72.5-28.6L318.9 128l2.2 0z"/></svg>

                            Tipos de Serviços
                        </a>
                    </li>

                    <li>
                        <a
                        class="flex items-center gap-2 text-sm font-semibold text-purple-800 hover:text-white bg-white hover:bg-purple-800 py-2 px-4"
                        href="{{ route('product-feature.index') }}">

                            <svg class="w-4 h-4 fill-purple-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M58.9 42.1c3-6.1 9.6-9.6 16.3-8.7L320 64 564.8 33.4c6.7-.8 13.3 2.7 16.3 8.7l41.7 83.4c9 17.9-.6 39.6-19.8 45.1L439.6 217.3c-13.9 4-28.8-1.9-36.2-14.3L320 64 236.6 203c-7.4 12.4-22.3 18.3-36.2 14.3L37.1 170.6c-19.3-5.5-28.8-27.2-19.8-45.1L58.9 42.1zM321.1 128l54.9 91.4c14.9 24.8 44.6 36.6 72.5 28.6L576 211.6l0 167c0 22-15 41.2-36.4 46.6l-204.1 51c-10.2 2.6-20.9 2.6-31 0l-204.1-51C79 419.7 64 400.5 64 378.5l0-167L191.6 248c27.8 8 57.6-3.8 72.5-28.6L318.9 128l2.2 0z"/></svg>

                            Características
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <a
                class="border shadow-md rounded-md flex items-center gap-2 text-sm font-semibold text-white bg-red-500 hover:bg-red-400 py-2 px-4"
                href="{{ route('logout') }}">

                    <svg class="w-4 h-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M58.9 42.1c3-6.1 9.6-9.6 16.3-8.7L320 64 564.8 33.4c6.7-.8 13.3 2.7 16.3 8.7l41.7 83.4c9 17.9-.6 39.6-19.8 45.1L439.6 217.3c-13.9 4-28.8-1.9-36.2-14.3L320 64 236.6 203c-7.4 12.4-22.3 18.3-36.2 14.3L37.1 170.6c-19.3-5.5-28.8-27.2-19.8-45.1L58.9 42.1zM321.1 128l54.9 91.4c14.9 24.8 44.6 36.6 72.5 28.6L576 211.6l0 167c0 22-15 41.2-36.4 46.6l-204.1 51c-10.2 2.6-20.9 2.6-31 0l-204.1-51C79 419.7 64 400.5 64 378.5l0-167L191.6 248c27.8 8 57.6-3.8 72.5-28.6L318.9 128l2.2 0z"/></svg>

                    Sair
                </a>
            </div>
        </div>
    </aside>

    <div class="container flex justify-end items-center">

        {{-- <div>
            <p x-text="openMenu"></p>
        </div> --}}

        <div>
            <button
            type="button"
            x-on:click="openMenuWrapper = true; openMenu = true">
                <svg class="w-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/></svg>
            </button>
        </div>
    </div>

    <div
    class="w-full h-screen top-0 left-0 absolute flex justify-center bg-black/50 z-50"
    x-show="openMenuWrapper"
    x-transition:enter="transition duration-500"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition duration-500"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0">

        {{-- <div class="w-full lg:w-4/5 h-full bg-white p-4">

            <div class="flex justify-end pb-4">

                <button
                class="w-10 h-10 rounded-full flex justify-center items-center bg-purple-800"
                x-on:click="openMenu = false">
                    <svg class="w-6 h-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                </button>
            </div>

            <div class="w-full h-full grid grid-cols-4 grid-rows-3 gap-4">

                <a
                class="col-span-4 row-span-1 row-start-1 row-end-2 border shadow-lg rounded-lg flex flex-col gap-4 bg-purple-800 p-4"
                href="{{ route('budget.index') }}">
                    <div class="w-16 h-16 rounded-full flex justify-center items-center bg-black/50">
                        <svg class="w-6 h-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M160 0c17.7 0 32 14.3 32 32l0 35.7c1.6 .2 3.1 .4 4.7 .7c.4 .1 .7 .1 1.1 .2l48 8.8c17.4 3.2 28.9 19.9 25.7 37.2s-19.9 28.9-37.2 25.7l-47.5-8.7c-31.3-4.6-58.9-1.5-78.3 6.2s-27.2 18.3-29 28.1c-2 10.7-.5 16.7 1.2 20.4c1.8 3.9 5.5 8.3 12.8 13.2c16.3 10.7 41.3 17.7 73.7 26.3l2.9 .8c28.6 7.6 63.6 16.8 89.6 33.8c14.2 9.3 27.6 21.9 35.9 39.5c8.5 17.9 10.3 37.9 6.4 59.2c-6.9 38-33.1 63.4-65.6 76.7c-13.7 5.6-28.6 9.2-44.4 11l0 33.4c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-34.9c-.4-.1-.9-.1-1.3-.2l-.2 0s0 0 0 0c-24.4-3.8-64.5-14.3-91.5-26.3c-16.1-7.2-23.4-26.1-16.2-42.2s26.1-23.4 42.2-16.2c20.9 9.3 55.3 18.5 75.2 21.6c31.9 4.7 58.2 2 76-5.3c16.9-6.9 24.6-16.9 26.8-28.9c1.9-10.6 .4-16.7-1.3-20.4c-1.9-4-5.6-8.4-13-13.3c-16.4-10.7-41.5-17.7-74-26.3l-2.8-.7s0 0 0 0C119.4 279.3 84.4 270 58.4 253c-14.2-9.3-27.5-22-35.8-39.6c-8.4-17.9-10.1-37.9-6.1-59.2C23.7 116 52.3 91.2 84.8 78.3c13.3-5.3 27.9-8.9 43.2-11L128 32c0-17.7 14.3-32 32-32z"/></svg>
                    </div>

                    <p class="text-2xl font-bold text-white">
                        Orçamento
                    </p>
                </a>

                <a
                class="col-span-2 col-start-1 col-end-3 row-span-1 border shadow-lg rounded-lg flex flex-col gap-4 bg-purple-800 p-4"
                href="{{ route('customer.index') }}">
                    <div class="w-16 h-16 rounded-full flex justify-center items-center bg-black/50">
                        <svg class="w-6 h-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z"/></svg>
                    </div>

                    <p class="text-2xl font-bold text-white">
                        Clientes
                    </p>
                </a>

                <div class="col-span-2 col-start-3 col-end-5 row-span-1 border shadow-lg rounded-lg flex flex-col gap-4 bg-purple-800 p-4">
                    <div class="w-16 h-16 rounded-full flex justify-center items-center bg-black/50">
                        <svg class="w-6 h-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M352 320c88.4 0 160-71.6 160-160c0-15.3-2.2-30.1-6.2-44.2c-3.1-10.8-16.4-13.2-24.3-5.3l-76.8 76.8c-3 3-7.1 4.7-11.3 4.7L336 192c-8.8 0-16-7.2-16-16l0-57.4c0-4.2 1.7-8.3 4.7-11.3l76.8-76.8c7.9-7.9 5.4-21.2-5.3-24.3C382.1 2.2 367.3 0 352 0C263.6 0 192 71.6 192 160c0 19.1 3.4 37.5 9.5 54.5L19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L297.5 310.5c17 6.2 35.4 9.5 54.5 9.5zM80 408a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>
                    </div>

                    <p class="text-2xl font-bold text-white">
                        Serviços
                    </p>
                </div>
            </div>
        </div> --}}

        <div
        class="w-full lg:w-3/5 h-full shadow-lg rounded-lg bg-purple-800 p-4"
        {{-- x-init="setTimeout(() => openMenu = openMenuWrapper ? true : false, 1500)" --}}
        x-show="openMenu"
        x-transition:enter="transition duration-500 delay-[800ms]"
        x-transition:enter-start="translate-y-full"
        x-transition:enter-end="translate-y-0"
        x-transition:leave="transition duration-500"
        x-transition:leave-start="translate-y-0"
        x-transition:leave-end="translate-y-full">

            <div class="flex justify-end pb-4">

                <button
                class="w-10 h-10 hover:scale-90 transition rounded-full flex justify-center items-center bg-white"
                x-on:click="openMenuWrapper = false; openMenu = false">
                    <svg class="w-6 h-6 fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                </button>
            </div>

            <div class="w-full h-full grid grid-cols-4 grid-rows-3 gap-4">

                <a
                class="nav-item col-span-4 row-span-1 row-start-1 row-end-2"
                href="{{ route('budget.index') }}">
                    <div class="nav-item-wrapper-icon w-16 h-16">
                        <svg class="w-6 h-6 nav-item-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M160 0c17.7 0 32 14.3 32 32l0 35.7c1.6 .2 3.1 .4 4.7 .7c.4 .1 .7 .1 1.1 .2l48 8.8c17.4 3.2 28.9 19.9 25.7 37.2s-19.9 28.9-37.2 25.7l-47.5-8.7c-31.3-4.6-58.9-1.5-78.3 6.2s-27.2 18.3-29 28.1c-2 10.7-.5 16.7 1.2 20.4c1.8 3.9 5.5 8.3 12.8 13.2c16.3 10.7 41.3 17.7 73.7 26.3l2.9 .8c28.6 7.6 63.6 16.8 89.6 33.8c14.2 9.3 27.6 21.9 35.9 39.5c8.5 17.9 10.3 37.9 6.4 59.2c-6.9 38-33.1 63.4-65.6 76.7c-13.7 5.6-28.6 9.2-44.4 11l0 33.4c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-34.9c-.4-.1-.9-.1-1.3-.2l-.2 0s0 0 0 0c-24.4-3.8-64.5-14.3-91.5-26.3c-16.1-7.2-23.4-26.1-16.2-42.2s26.1-23.4 42.2-16.2c20.9 9.3 55.3 18.5 75.2 21.6c31.9 4.7 58.2 2 76-5.3c16.9-6.9 24.6-16.9 26.8-28.9c1.9-10.6 .4-16.7-1.3-20.4c-1.9-4-5.6-8.4-13-13.3c-16.4-10.7-41.5-17.7-74-26.3l-2.8-.7s0 0 0 0C119.4 279.3 84.4 270 58.4 253c-14.2-9.3-27.5-22-35.8-39.6c-8.4-17.9-10.1-37.9-6.1-59.2C23.7 116 52.3 91.2 84.8 78.3c13.3-5.3 27.9-8.9 43.2-11L128 32c0-17.7 14.3-32 32-32z"/></svg>
                    </div>

                    <p class="text-2xl nav-item-title">
                        Orçamento
                    </p>
                </a>

                <a
                class="nav-item col-span-2 col-start-1 col-end-3 row-span-1"
                href="{{ route('customer.index') }}">
                    <div class="nav-item-wrapper-icon w-12 h-12">
                        <svg class="w-4 h-4 nav-item-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z"/></svg>
                    </div>

                    <p class="text-xl nav-item-title">
                        Clientes
                    </p>
                </a>

                <a
                class="nav-item col-span-2 col-start-3 col-end-5 row-span-1"
                href="{{ route('service.index') }}">
                    <div class="nav-item-wrapper-icon w-12 h-12">
                        <svg class="w-4 h-4 nav-item-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M352 320c88.4 0 160-71.6 160-160c0-15.3-2.2-30.1-6.2-44.2c-3.1-10.8-16.4-13.2-24.3-5.3l-76.8 76.8c-3 3-7.1 4.7-11.3 4.7L336 192c-8.8 0-16-7.2-16-16l0-57.4c0-4.2 1.7-8.3 4.7-11.3l76.8-76.8c7.9-7.9 5.4-21.2-5.3-24.3C382.1 2.2 367.3 0 352 0C263.6 0 192 71.6 192 160c0 19.1 3.4 37.5 9.5 54.5L19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L297.5 310.5c17 6.2 35.4 9.5 54.5 9.5zM80 408a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>
                    </div>

                    <p class="text-xl nav-item-title">
                        Serviços
                    </p>
                </a>
            </div>
        </div>
    </div>
</header>
