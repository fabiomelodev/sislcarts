<?php

namespace App\Http\Controllers;

use App\Enums\Status;
use App\Models\TypeService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;

class TypeServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeServices = TypeService::all();

        return view('pages.type-service.index', [
            'typeServices' => $typeServices
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.type-service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

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
    public function edit(TypeService $typeService)
    {
        return view('pages.type-service.edit', [
            'typeService' => $typeService,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TypeService $typeService)
    {
        $typeService = TypeService::findOrFail($typeService->id);

        $typeService->name = $request->input('name');

        $typeService->status = $request->input('status');

        $typeService->save();

        return redirect()
            ->route('type-service.edit', $typeService->id)
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
