<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stocks = Stock::all();

        return view('pages.stock.index', [
            'stocks' => $stocks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.stock.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'  => 'required|string|max:255',
            'value' => 'required|string|max:255',
        ]);

        $stock = Stock::create($data);

        return redirect()
            ->route('stock.edit', $stock->id)
            ->with('success', 'Estoque cadastrado com sucesso!');
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
    public function edit(Stock $stock)
    {
        return view('pages.stock.edit', [
            'stock' => $stock,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stock $stock)
    {
        $stock = Stock::findOrFail($stock->id);

        $stock->name = $request->input('name');

        $stock->value = $request->input('value');

        $stock->save();

        return redirect()
            ->route('stock.edit', $stock->id)
            ->with('success', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
