<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $budgets = Budget::where('user_id', Auth::user()->id)->get();

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
        $services = Service::where('user_id', Auth::user()->id)->pluck('name', 'id')->toArray();

        $notification = [
            'message' => 'Criado com sucesso!',
            'show'    => true
        ];

        return view('pages.budget.edit', [
            'budget'       => $budget,
            'services'     => $services,
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
