<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $budgets = Budget::all();

        return view('pages.budget.index', [
            'budgets' => $budgets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Budget $budget)
    {
        $notification = [
            'message' => 'Criado com sucesso!',
            'show'    => true
        ];

        return view('pages.budget.edit', [
            'budget'       => $budget,
            'notification' => $notification
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Budget $budget)
    {
        Budget::find($budget->id)->delete();

        return redirect(route('budget.index'));
    }
}
