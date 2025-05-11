<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();

        return view('pages.customer.index', [
            'customers' => $customers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('pages.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'         => 'required|string|max:255',
            'phone'        => 'nullable|string|max:20',
            'contact_type' => 'required|string',
        ]);

        if (Customer::where('phone', $request->input('phone'))->exists()) {
            return redirect(route('customer.create', [
                'message' => 'Cliente já existe!'
            ]));
        }

        $customer = Customer::create($data);

        return redirect()
            ->route('customer.edit', $customer->id)
            ->with('success', 'Cliente cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('pages.customer.edit', [
            'customer' => $customer,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $customer = Customer::findOrFail($customer->id);

        $customer->name = $request->input('name');

        $customer->phone = $request->input('phone');

        $customer->contact_type = $request->input('contact_type');

        $customer->save();

        return redirect()
            ->route('customer.edit', $customer->id)
            ->with('success', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        Customer::find($customer->id)->delete();

        return redirect(route('customer.index'));
    }
}
