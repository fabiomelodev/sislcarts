<?php

namespace App\Livewire;

use App\Models\Budget;
use App\Models\Customer;
use Livewire\Component;

class BudgetCreate extends Component
{
    public bool $showExistingCustomers = false;

    public bool $showCreateNewCustomers = false;

    public $customers;

    public string $customer_id = '';

    public string $phone = '';

    public string $name = '';

    public string $contact_type = '';

    public bool $notFindCustomer = false;

    public string $stepCurrent = '1';

    public bool $validateFields = false;

    public Customer $customer;

    public string $type_budget = '';

    public string $value = '';

    public string $per_hour = '';

    public string $service_type = '';

    public string $frame_type = '';

    public string $frame_size = '';

    protected $messages = [
        'phone.required'        => 'O Telefone é obrigatório.',
        'name.required'         => 'O nome é obrigatório.',
        'contact_type.required' => 'A tipo de contato é obrigatório.',
        'type_budget.required' => 'A tipo de orçamento é obrigatório.',
        'service_type.required' => 'A tipo de serviço é obrigatório.',
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

            $this->customers = Customer::orderBy('name', 'ASC')->get();
        }
    }

    public function validateStepFirst()
    {
        if (!empty(Customer::find($this->customer_id))) {
            $customer = Customer::find($this->customer_id);

            $this->phone = $customer->phone;

            $this->name = $customer->name;

            $this->contact_type = $customer->contact_type;
        }

        if ($this->showCreateNewCustomers) {
            if (Customer::where('phone', $this->phone)->exists()) {
                $this->customer = Customer::where('phone', $this->phone)->first();
            } else {
                $customer = Customer::create([
                    'name'         => $this->name,
                    'phone'        => $this->phone,
                    'contact_type' => $this->contact_type
                ]);
            }
        }

        $this->validate($this->rules());

        $this->stepCurrent = 2;
    }

    public function validateStepSecond()
    {
        if (
            $this->type_budget != ''
            && $this->service_type != ''
            || $this->value != ''
            || $this->per_hour != ''
            && $this->frame_type != ''
            && $this->frame_size != ''
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

            // $this->validateFields = false;

            // $this->notFindCustomer = false;
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
            'type_budget'  => $this->type_budget,
            'value'        => $this->value,
            'per_hour'     => $this->per_hour,
            'service_type' => $this->service_type,
            'frame_type'   => $this->frame_type,
            'frame_size'   => $this->frame_size,
            'customer_id'  => $this->customer->id
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
                'contact_type' => 'required'
            ];
        } elseif ($this->stepCurrent == 2) {
            if ($this->type_budget == 'Valor fechado') {
                $rules = [
                    'type_budget'  => 'required',
                    'service_type' => 'required',
                    'value'        => 'required'
                ];
            }

            if ($this->type_budget == 'Por hora') {
                $rules = [
                    'type_budget'  => 'required',
                    'service_type' => 'required',
                    'per_hour'     => 'required'
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
