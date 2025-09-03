<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTipoProvaRequest;
use App\Http\Requests\UpdateTipoProvaRequest;
use App\Models\TipoProva;

class TipoProvaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipoProvas = TipoProva::latest()->paginate(10);
        return view('tipo_provas.index', compact('tipoProvas'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipo_provas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTipoProvaRequest $request)
    {
        TipoProva::create($request->validated());
        return redirect()->route('tipo_provas.index')
            ->with('success', 'Tipo de Prova criado com sucesso.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoProva $tipoProva)
    {
        return view('tipo_provas.edit', compact('tipoProva'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTipoProvaRequest $request, TipoProva $tipoProva)
    {
        $tipoProva->update($request->validated());
        return redirect()->route('tipo_provas.index')
            ->with('success', 'Tipo de Prova atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoProva $tipoProva)
    {
        $tipoProva->delete();
        return redirect()->route('tipo_provas.index')
            ->with('success', 'Tipo de Prova deletado com sucesso.');
    }
}
