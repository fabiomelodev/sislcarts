<x-layout.base>
    <x-slot name="title">Registrar</x-slot>

    <section class="w-full h-screen border-t-4 border-[#001B48] relative flex justify-center items-center bg-[#F3F4F6]">

        <div class="container relative flex justify-center z-50">

            <div class="w-full lg:w-8/12">

                <div class="w-full h-[450px] border-l-8 border-[#001B48] shadow-2xl rounded-lg grid grid-cols-1 lg:grid-cols-12 bg-white">

                    <div class="lg:col-span-7 h-full relative flex flex-col justify-center items-center gap-6 px-4 lg:px-10">

                        <div class="w-20 h-20 -top-10 left-1/2 -translate-x-1/2 border shadow-lg rounded-full absolute bg-gray-800"></div>

                        <div class="w-full">
                            <h1 class="text-4xl font-bold">
                                Criar conta agora
                            </h1>
                        </div>

                        <div class="w-full">
                            <form method="POST" action="{{ route('login.register') }}">
                                @csrf

                                <div class="flex flex-col gap-4">

                                    <div>
                                        <label
                                        class="label-field"
                                        for="name">
                                            Nome:
                                        </label>

                                        <input
                                        class="input-field"
                                        type="text"
                                        name="name"
                                        id="name" />
                                    </div>

                                    <div>
                                        <label
                                        class="label-field"
                                        for="email">
                                            E-mail:
                                        </label>

                                        <input
                                        class="input-field"
                                        type="email"
                                        name="email"
                                        id="email" />
                                    </div>

                                    <div>
                                        <label
                                        class="label-field"
                                        for="password">
                                            Senha:
                                        </label>

                                        <input
                                        class="input-field"
                                        type="password"
                                        name="password"
                                        id="password" />
                                    </div>

                                    <div>
                                        <input
                                        class="btn-submit"
                                        type="submit"
                                        value="Criar conta" />
                                    </div>

                                    <div>
                                        <a
                                        class="block text-sm font-bold text-center hover:underline text-gray-800"
                                        href="{{ route('login.index') }}">
                                            Entrar
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-span-5 rounded-lg overflow-hidden hidden lg:block">

                        <div class="swiper h-full js-swiper-login">

                            <div class="swiper-wrapper">

                                <!-- loop -->
                                <div class="swiper-slide">
                                     <img
                                    class="w-full h-full object-cover"
                                    src="https://media.istockphoto.com/id/1294806496/photo/making-embroidery-canvas-on-the-table.jpg?s=612x612&w=0&k=20&c=11Sf7AqZFbD3npbtC-7BjJIS3oOvfpLDzxX0U0fzQQE="
                                    alt="" />
                                </div>

                                <div class="swiper-slide">
                                     <img
                                    class="w-full h-full object-cover"
                                    src="https://i.etsystatic.com/27497104/r/il/d06f96/3013710781/il_570xN.3013710781_nfs4.jpg"
                                    alt="" />
                                </div>

                                <div class="swiper-slide">
                                     <img
                                    class="w-full h-full object-cover"
                                    src="https://i.etsystatic.com/19870509/r/il/1139bd/4214633253/il_570xN.4214633253_eerb.jpg"
                                    alt="" />
                                </div>
                                <!-- end loop -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="inset-0 opacity-20 fixed flex justify-end">

            <div class="w-1/2 h-full rounded-tl-lg rounded-bl-lg overflow-hidden relative">

                <div class="inset-0 absolute bg-gradient-to-r from-[#F3F4F6] to-transparent z-10"></div>

                <div class="swiper h-full js-swiper-login">

                    <div class="swiper-wrapper">

                        <!-- loop -->
                        <div class="swiper-slide">
                                <img
                            class="w-full h-full object-cover"
                            src="https://media.istockphoto.com/id/1294806496/photo/making-embroidery-canvas-on-the-table.jpg?s=612x612&w=0&k=20&c=11Sf7AqZFbD3npbtC-7BjJIS3oOvfpLDzxX0U0fzQQE="
                            alt="" />
                        </div>

                        <div class="swiper-slide">
                                <img
                            class="w-full h-full object-cover"
                            src="https://i.etsystatic.com/27497104/r/il/d06f96/3013710781/il_570xN.3013710781_nfs4.jpg"
                            alt="" />
                        </div>

                        <div class="swiper-slide">
                                <img
                            class="w-full h-full object-cover"
                            src="https://i.etsystatic.com/19870509/r/il/1139bd/4214633253/il_570xN.4214633253_eerb.jpg"
                            alt="" />
                        </div>
                        <!-- end loop -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout.base>
