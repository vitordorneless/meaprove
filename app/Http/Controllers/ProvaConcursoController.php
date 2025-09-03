<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProvaConcursoRequest;
use App\Http\Requests\UpdateProvaConcursoRequest;
use App\Models\ProvaConcurso;

class ProvaConcursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provaConcursos = ProvaConcurso::latest()->paginate(10);
        return view('prova_concursos.index', compact('provaConcursos'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prova_concursos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProvaConcursoRequest $request)
    {
        ProvaConcurso::create($request->validated());
        return redirect()->route('prova_concursos.index')
            ->with('success', 'Prova do Concurso criado com sucesso.');
    }    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProvaConcurso $provaConcurso)
    {
        return view('prova_concursos.edit', compact('provaConcurso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProvaConcursoRequest $request, ProvaConcurso $provaConcurso)
    {
        $provaConcurso->update($request->validated());
        return redirect()->route('prova_concursos.index')
            ->with('success', 'Prova do Concurso atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProvaConcurso $provaConcurso)
    {
        $provaConcurso->delete();
        return redirect()->route('prova_concursos.index')
            ->with('success', 'Prova do Concurso deletado com sucesso.');
    }
}
