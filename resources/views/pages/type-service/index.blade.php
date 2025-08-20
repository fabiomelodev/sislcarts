<x-layout.base>
    <x-slot name="title">Tipos de serviços</x-slot>

    @if(session('success'))
        <x-notifications.success message="{{ session('success') }}"/>
    @endif

    <section class="pt-14">

        <div class="container flex justify-center">

            <div class="w-full lg:lg:w-8/12">

                <div class="border shadow-lg rounded-lg bg-gray-100 p-4">

                    <div class="border-b border-purple-600/20 flex justify-between py-2">
                        <div class="flex items-center">
                            <h1
                            class="text-2xl font-bold"
                            style="line-height:100%">
                                Tipos de serviços
                            </h1>
                        </div>

                        <div>
                            <a
                            class="button-action button-action-create"
                            href="{{ route('type-service.create') }}">
                                Criar novo
                            </a>
                        </div>
                    </div>

                    <div class="flex mt-4">

                        <!-- table -->
                        <livewire:table-type-services :collections="$typeServices" />
                        <!-- end table -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout.base>
