<x-layout.base>
    <x-slot name="title">Editar | Orçamento</x-slot>

    @if($notification['show'])
        <div class="top-8 right-4 border shadow-lg rounded-lg absolute flex justify-center items-center gap-2 bg-white py-2 px-6">
            <p class="text-sm font-medium text-center">
                {{ $notification['message'] }}
            </p>

            <div class="w-4 h-4 rounded-full bg-green-500"></div>
        </div>
    @endif

    <section class="pt-14">

        <div class="container flex justify-center">

            <div class="w-full lg:w-8/12">

                <div class="border shadow-lg rounded-lg bg-gray-100 p-4">

                    <div class="border-b border-purple-600/20 flex justify-between py-2">
                        <div class="flex items-center">
                            <h1
                            class="text-2xl font-bold"
                            style="line-height:100%">
                                Editar
                            </h1>
                        </div>

                        <div>
                            <a
                            class="button-action button-action-create"
                            href="{{ route('budget.index') }}">
                                Listagem
                            </a>
                        </div>
                    </div>

                    <div class="mt-6">
                        <form action="{{ route('budget.update', $budget->id) }}" method="POST">
                            @method('PUT')
                            @csrf

                            <div class="flex flex-wrap justify-between gap-y-4">

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
                                    value="{{ $budget->customer->name }}" />
                                </div>

                                <div class="w-1/2 flex flex-col pr-4">

                                    <label
                                    class="text-sm font-medium"
                                    for="type_budget">
                                        Tipo de orçamento:
                                    </label>

                                    <input
                                    class="input-field"
                                    type="phone"
                                    name="type_budget"
                                    id="type_budget"
                                    value="{{ $budget->type_budget }}" />
                                </div>

                                <div class="w-1/2 flex flex-col pl-4">
                                    <label
                                    class="text-sm font-medium"
                                    for="service_type">
                                        Tipo de serviço:
                                    </label>

                                    <select
                                    class="input-field"
                                    name="service_type"
                                    id="service_type"
                                    value="{{ $budget->service_type }}">
                                        <option value="0">Selecione</option>
                                        <option value="Whatsapp">Whatsapp</option>
                                        <option value="Recomendação">Recomendação</option>
                                    </select>
                                </div>

                                <div class="w-full flex flex-col gap-1">

                                    <label
                                    class="text-sm font-medium"
                                    for="value">
                                        Valor:
                                    </label>

                                    <input
                                    class="input-field"
                                    type="text"
                                    name="value"
                                    id="value"
                                    value="{{ $budget->value }}" />
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
