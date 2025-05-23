<?php

namespace App\Livewire;

use App\Models\Budget;
use App\Models\Customer;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\On;

class BudgetCreate extends Component
{
    public bool $showExistingCustomers = false;

    public bool $showCreateNewCustomers = false;

    public string $customer_id = '';

    public string $name = '';

    public string $phone = '';

    public string $contactType = '';

    public bool $notFindCustomer = false;

    public string $stepCurrent = '1';

    public bool $validateFields = false;

    public Customer $customer;

    public string $budgetType = '';

    public string $value = '';

    public Service $service;

    protected $listeners = [
        'setCustomer',
        'setContactTypes',
        'setBudgetType',
        'setService'
    ];

    protected $messages = [
        'phone.required'        => 'O Telefone é obrigatório.',
        'name.required'         => 'O nome é obrigatório.',
        'contactType.required'  => 'A tipo de contato é obrigatório.',
        'budget_type.required'  => 'A tipo de orçamento é obrigatório.',
        'service_id.required'   => 'A tipo de serviço é obrigatório.',
    ];

    public function showFields($buttonType)
    {
        if ($buttonType == 'create-customer') {
            $this->showCreateNewCustomers = true;

            $this->showExistingCustomers = false;
        }

        if ($buttonType == 'exist-customers') {
            $this->showExistingCustomers = true;

            $this->showCreateNewCustomers = false;
        }
    }

    #[On('setCustomer')]
    public function setCustomer($customer_id)
    {
        $this->customer_id = $customer_id;

        $this->customer = Customer::where('user_id', Auth::user()->id)
            ->find($customer_id);
    }

    public function getCustomers(): array
    {
        return Customer::where('user_id', Auth::user()->id)
            ->pluck('name', 'id')
            ->toArray();
    }

    #[On('setContactType')]
    public function setContactType($contactType)
    {
        $this->contactType = $contactType;
    }

    public function getContactTypes(): array
    {
        return [
            0 => 'Whatsapp',
            1 => 'Recomendação'
        ];
    }

    #[On('setService')]
    public function setService($serviceId)
    {
        $this->service = Service::where('user_id', Auth::user()->id)->find($serviceId);
    }

    public function getServices(): array
    {
        return Service::actives()
            ->where('user_id', Auth::user()->id)
            ->pluck('name', 'id')
            ->toArray();
    }

    public function getBudgetTypes(): array
    {
        return [
            0 => 'Valor fechado',
            1 => 'Por hora'
        ];
    }

    #[On('setBudgetType')]
    public function setBudgetType($budgetType)
    {
        $this->budgetType = $budgetType;
    }

    public function validateStepFirst()
    {
        if (!empty(Customer::find($this->customer_id))) {
            $this->customer = Customer::find($this->customer_id);

            $this->phone = $this->customer->phone;

            $this->name = $this->customer->name;

            $this->contactType = $this->customer->contact_type;
        }

        if ($this->showCreateNewCustomers) {
            if (Customer::where('phone', $this->phone)->exists()) {
                $this->customer = Customer::where('phone', $this->phone)->first();
            } else {
                $this->customer = Customer::create([
                    'name'         => $this->name,
                    'phone'        => $this->phone,
                    'contact_type' => $this->contactType,
                    'user_id'      => Auth::user()->id
                ]);
            }
        }

        $this->validate($this->rules());

        $this->stepCurrent = 2;
    }

    public function validateStepSecond()
    {
        if (
            $this->budgetType != ''
            && isset($this->service)
            && $this->value != ''
        ) {
            $this->stepCurrent = 3;

            $this->validateFields = false;
        } else {
            $this->validateFields = true;
        }
    }

    public function prev()
    {
        if ($this->stepCurrent != 1) {
            $this->stepCurrent--;
        }
    }

    public function next($step)
    {
        if ($step == '1') {
            $this->validateStepFirst();
        }

        if ($step == '2') {
            $this->validateStepSecond();
        }
    }

    public function save()
    {
        $budget = Budget::create([
            'budget_type'  => $this->budgetType,
            'value'        => $this->value,
            'service_id'   => $this->service->id,
            'customer_id'  => $this->customer->id,
            'user_id'      => Auth::user()->id
        ]);

        redirect(route('budget.edit', [
            'budget' => $budget
        ]));
    }

    public function rules()
    {
        $rules = [];

        if ($this->stepCurrent == 1) {
            $rules = [
                'name'         => 'required',
                'phone'        => 'required',
                'contactType'  => 'required'
            ];
        } elseif ($this->stepCurrent == 2) {
            if ($this->budgetType == 'Valor fechado') {
                $rules = [
                    'budget_type'  => 'required',
                    'service'      => 'required',
                    'value'        => 'required'
                ];
            }

            if ($this->budgetType == 'Por hora') {
                $rules = [
                    'budget_type'  => 'required',
                    'service'      => 'required',
                ];
            }
        }

        return $rules;
    }

    public function render()
    {
        return view('livewire.budget-create');
    }
}
