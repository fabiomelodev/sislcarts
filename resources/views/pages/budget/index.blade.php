<x-layout.base>
    <x-slot name="title">Orçamentos</x-slot>

    @if(session('success'))
        <x-notifications.success message="{{ session('success') }}"/>
    @endif

    <section class="pt-14">

        <div class="container flex flex-wrap justify-center">

            {{-- <div class="w-2/12 pr-4">

                <ul class="top-0 flex flex-col gap-2 sticky pt-4">

                    @php
                        $tabs = [
                            [
                                'title' => 'Listagem',
                                'link'  => '#listagem'
                            ],

                            [
                                'title' => 'Dados',
                                'link'  => '#dados'
                            ],
                        ];
                    @endphp

                    @foreach($tabs as $tab)
                        <li class="tab-item">
                            <a
                            class="tab-link"
                            href="{{ $tab['link'] }}">
                                <span class="relative z-20">
                                    {{ $tab['title'] }}
                                </span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div> --}}

            <div class="w-full lg:lg:w-8/12">

                <div
                class="border shadow-lg rounded-lg bg-gray-100 p-4"
                id="listagem">

                    <div class="border-b border-purple-600/20 flex justify-between py-2">
                        <div class="flex items-center">
                            <h1
                            class="text-2xl font-bold"
                            style="line-height:100%">
                                Orçamentos
                            </h1>
                        </div>

                        <div>
                            <a
                            class="button-action button-action-create"
                            href="{{ route('budget.create') }}">
                                Criar novo
                            </a>
                        </div>
                    </div>

                    <div class="flex mt-4">

                        <!-- table -->
                        <livewire:table-budgets />
                        <!-- end table -->
                    </div>
                </div>

                <div
                class="grid grid-cols-3 gap-4 mt-10"
                id="dados">

                    @for($i = 0; $i < 3; $i++)
                        <div class="border shadow-lg rounded-lg flex flex-col gap-4 p-4">

                            <div class="w-10 h-10 shadow-lg rounded-full bg-purple-800"></div>

                            <div>
                                <h3 class="text-2xl font-bold text-gray-800">
                                    R$ 00,00
                                </h3>

                                <p class="font-medium text-gray-500">
                                    Descrição
                                </p>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>
</x-layout.base>
