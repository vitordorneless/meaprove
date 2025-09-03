<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBancaRequest;
use App\Http\Requests\UpdateBancaRequest;
use App\Models\Banca;

class BancaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bancas = Banca::latest()->paginate(10);
        return view('bancas.index', compact('bancas'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bancas.create');   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBancaRequest $request)
    {
        Banca::create($request->validated());
        return redirect()->route('bancas.index')
            ->with('success', 'Banca criada com sucesso.');
    }

    public function edit(Banca $banca)
    {
        return view('bancas.edit', compact('banca'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBancaRequest $request, Banca $banca)
    {
        $banca->update($request->validated());
        return redirect()->route('bancas.index')
            ->with('success', 'Banca atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banca $banca)
    {
        $banca->delete();
        return redirect()->route('bancas.index')
            ->with('success', 'Banca deletada com sucesso.');
    }
}
