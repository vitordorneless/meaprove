<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProvaTextoRequest;
use App\Http\Requests\UpdateProvaTextoRequest;
use App\Models\ProvaTexto;

class ProvaTextoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provaTextos = ProvaTexto::latest()->paginate(10);
        return view('prova_textos.index', compact('provaTextos'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prova_textos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProvaTextoRequest $request)
    {
        ProvaTexto::create($request->validated());
        return redirect()->route('prova_textos.index')
            ->with('success', 'Prova de Texto criada com sucesso.');
    }    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProvaTexto $provaTexto)
    {
        return view('prova_textos.edit', compact('provaTexto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProvaTextoRequest $request, ProvaTexto $provaTexto)
    {
        $provaTexto->update($request->validated());
        return redirect()->route('prova_textos.index')
            ->with('success', 'Prova de Texto atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProvaTexto $provaTexto)
    {
        $provaTexto->delete();
        return redirect()->route('prova_textos.index')
            ->with('success', 'Prova de Texto deletada com sucesso.');
    }
}
