<x-layout.base>
    <x-slot name="title">Editar | Clientes</x-slot>

    @if(session('success'))
        <x-notifications.success message="{{ session('success') }}"/>
    @endif

    <section class="pt-14">

        <div class="container flex justify-center">

            <div class="lg:w-8/12">

                <div class="border shadow-lg rounded-lg bg-gray-100 p-4">

                    <div class="border-b border-purple-600/20 flex justify-between py-2">
                        <div class="flex items-center">
                            <h1
                            class="text-2xl font-bold"
                            style="line-height:100%">
                                Cliente | Editar
                            </h1>
                        </div>

                        <div>
                            <a
                            class="button-action button-action-create"
                            href="{{ route('customer.index') }}">
                                Listagem
                            </a>
                        </div>
                    </div>

                    <div class="mt-6">
                        <form action="{{ route('customer.update', $customer->id) }}" method="POST">
                            @method('PUT')
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
                                    value="{{ $customer->name }}" />
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
                                    name="phone"
                                    value="{{ $customer->phone }}" />
                                </div>

                                <div class="w-full flex flex-col gap-1">
                                    <label
                                    class="text-sm font-medium"
                                    for="contact_type">
                                        Por onde entrou em contato:
                                    </label>

                                    <select
                                    class="input-field"
                                    name="contact_type"
                                    id="contact_type"
                                    value="{{ $customer->contact_type }}">
                                        <option value="0">Selecione</option>
                                        <option value="Whatsapp">Whatsapp</option>
                                        <option value="Recomendação">Recomendação</option>
                                    </select>
                                </div>

                                <div class="w-full flex justify-center">
                                    <button
                                    class="shadow-lg rounded-lg text-sm font-bold text-center text-white bg-purple-400 hover:bg-purple-500 py-2 px-4"
                                    type="submit">
                                        Salvar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout.base>
