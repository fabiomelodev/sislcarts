<section class="w-full flex justify-center items-center py-6">

    <div class="container h-full flex justify-center items-center">

        <div class="lg:w-8/12 h-full">

            <div class="h-full border rounded-lg shadow-lg flex flex-col justify-between gap-4 bg-gray-100 p-4">

                <div class="flex flex-col items-center gap-1">
                    <h2 class="text-2xl font-bold text-center capitalize">
                        Criar orçamento
                    </h2>

                    <p class="text-xs lg:text-sm font-normal text-center">
                        Preencha todos os campos e etapas para ter o detalhe do orçamento
                    </p>
                </div>

                <x-step-by-step step="{{ $stepCurrent }}"/>

                @if($validateFields)
                    <div>
                        <div class="border shadow-lg rounded-lg flex justify-center items-center bg-red-500 py-4">
                            <p class="text-sm font-medium text-center text-white">
                                Obrigatório todos os campos preenchidos!
                            </p>
                        </div>
                    </div>
                @endif

                <div class="mt-4">
                    <form action="POST" wire:submit="save">
                        @if($stepCurrent == 1)
                            <div class="flex flex-wrap gap-4">

                                <div class="w-full">
                                    <div class="flex flex-col lg:flex-row justify-center gap-6">
                                        <button
                                        class="button-action {{ $showCreateNewCustomers ? 'is-active' : '' }}"
                                        type="button"
                                        wire:click="showFields('create-customer')">
                                            Cliente novo

                                            <svg class="button-action-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3zM504 312l0-64-64 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l64 0 0-64c0-13.3 10.7-24 24-24s24 10.7 24 24l0 64 64 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-64 0 0 64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
                                        </button>

                                        <button
                                        class="button-action {{ $showExistingCustomers ? 'is-active' : '' }}"
                                        type="button"
                                        wire:click="showFields('exist-customers')">
                                            Cliente existente

                                            <svg class="button-action-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c10 0 18.8-4.9 24.2-12.5l-99.2-99.2c-14.9-14.9-23.3-35.1-23.3-56.1l0-33c-15.9-4.7-32.8-7.2-50.3-7.2l-91.4 0zM384 224c-17.7 0-32 14.3-32 32l0 82.7c0 17 6.7 33.3 18.7 45.3L478.1 491.3c18.7 18.7 49.1 18.7 67.9 0l73.4-73.4c18.7-18.7 18.7-49.1 0-67.9L512 242.7c-12-12-28.3-18.7-45.3-18.7L384 224zm24 80a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/></svg>
                                        </button>
                                    </div>
                                </div>

                                @if($showCreateNewCustomers)
                                    <div class="w-full">
                                        <label
                                        class="label-field"
                                        for="name">
                                            Nome completo:
                                        </label>

                                        <input
                                        class="input-field"
                                        type="text"
                                        wire:model="name"
                                        id="name" />

                                        @error('name')
                                            <span class="error">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="w-full">
                                        <label
                                        class="label-field"
                                        for="phone">
                                            Telefone:
                                        </label>

                                        <input
                                        class="input-field"
                                        type="text"
                                        wire:model="phone"
                                        id="phone" />

                                        @error('phone')
                                            <span class="error">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="w-full">
                                        <livewire:form.select-field label="Por onde entrou em contato" name="contactType" :options="$this->getContactTypes()" value="{{ isset($contactType) ? $contactType : '' }}" event="setContactType" />

                                        @error('contactType')
                                            <span class="error">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                @endif

                                @if($showExistingCustomers)
                                    <div class="w-full">
                                        <livewire:form.select-field label="Cliente" name="customer" :options="$this->getCustomers()" value="{{ isset($customer) ? $customer->id : '' }}" event="setCustomer" />
                                    </div>
                                @endif
                            </div>
                        @endif

                        @if($stepCurrent == 2)
                            <div class="flex flex-wrap gap-4">

                                <div class="w-full">
                                    <livewire:form.select-field label="Tipo de orçamento" name="budget_type" :options="$this->getBudgetTypes()" value="{{ isset($budgetType) ? $budgetType : '' }}" event="setBudgetType" />
                                </div>

                                @if($budgetType != '')
                                    <div class="w-full">
                                        <label
                                        class="label-field"
                                        for="value">
                                            Valor:
                                        </label>

                                        <div class="rounded-lg overflow-hidden relative">
                                            <span class="w-8 h-full top-0 left-0 absolute flex justify-center items-center text-xs font-semibold text-white bg-gray-800">
                                                R$
                                            </span>

                                            <input
                                            class="input-field input-field-value"
                                            type="value"
                                            wire:model.live="value"
                                            id="value" />
                                        </div>
                                    </div>
                                @endif

                                @if($value != '')
                                    <div class="w-full">
                                        <livewire:form.select-field label="Serviço" name="service_id" :options="$this->getServices()" value="{{ isset($service) ? $service->id : '' }}" event="setService" />
                                    </div>
                                @endif
                            </div>
                        @endif

                        @if($stepCurrent == 3)
                            <div class="flex flex-wrap gap-4">

                                <div class="w-full">
                                    <h3 class="text-sm font-bold text-center">
                                        Detalhe
                                    </h3>
                                </div>

                                <div class="w-full">
                                    <p class="text-sm">
                                        <strong>Tipo do serviço: </strong> Bastidor
                                    </p>

                                    <p class="text-sm">
                                        <strong>Tipo do bastidor:</strong> Madeira | <span class="font-bold">R$ 00,00</span>
                                    </p>

                                    <p class="text-sm">
                                        <strong>Linhas: </strong> 2x | <span class="font-bold">R$ 00,00</span>
                                    </p>

                                    <p class="text-sm">
                                        <strong>Pano: </strong> 25x25 | <span class="font-bold">R$ 00,00</span>
                                    </p>

                                    <p class="text-sm">
                                        <strong>Acabamento: </strong> <span class="font-bold">R$ 00,00</span>
                                    </p>
                                </div>

                                <div class="w-full mt-6">
                                    <h3 class="font-bold">
                                        Total: R$ 00,00
                                    </h3>
                                </div>
                            </div>
                        @endif
                    </form>
                </div>

                @if($showCreateNewCustomers || $showExistingCustomers)
                    <div class="flex justify-center gap-12">
                        <button
                        class="disabled:opacity-20 border border-gray-700 shadow-lg rounded-lg text-sm font-bold text-center text-gray-800 hover:text-white bg-white hover:bg-gray-700 disabled:cursor-not-allowed py-2 px-4"
                        type="prev"
                        wire:click="prev"
                        {{ $stepCurrent == '1' ? 'disabled' : '' }}>
                            Voltar
                        </button>

                        @if($stepCurrent != '3')
                        <button
                        class="shadow-lg rounded-lg text-sm font-bold text-center text-white bg-purple-400 hover:bg-purple-500 py-2 px-4"
                        type="button"
                        wire:click="next({{ $stepCurrent }})">
                            Próximo
                        </button>
                        @else
                            <button
                            class="shadow-lg rounded-lg text-sm font-bold text-center text-white bg-purple-400 hover:bg-purple-500 py-2 px-4"
                            type="button"
                            wire:click="save">
                                Criar
                            </button>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
