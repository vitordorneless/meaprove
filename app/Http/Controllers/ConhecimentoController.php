<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConhecimentoRequest;
use App\Http\Requests\UpdateConhecimentoRequest;
use App\Models\Conhecimento;

class ConhecimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $conhecimentos = Conhecimento::latest()->paginate(10);
        return view('conhecimentos.index', compact('conhecimentos'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('conhecimentos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConhecimentoRequest $request)
    {
        Conhecimento::create($request->validated());
        return redirect()->route('conhecimentos.index')
            ->with('success', 'Conhecimento criado com sucesso.');
    }    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Conhecimento $conhecimento)
    {
        return view('conhecimentos.edit', compact('conhecimento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConhecimentoRequest $request, Conhecimento $conhecimento)
    {
        $conhecimento->update($request->validated());
        return redirect()->route('conhecimentos.index')
            ->with('success', 'Conhecimento atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Conhecimento $conhecimento)
    {
        $conhecimento->delete();
        return redirect()->route('conhecimentos.index')
            ->with('success', 'Conhecimento deletado com sucesso.');
    }
}
