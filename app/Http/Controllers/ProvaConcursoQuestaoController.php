<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProvaConcursoQuestaoRequest;
use App\Http\Requests\UpdateProvaConcursoQuestaoRequest;
use App\Models\ProvaConcursoQuestao;

class ProvaConcursoQuestaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provaConcursoQuestaos = ProvaConcursoQuestao::latest()->paginate(10);
        return view('prova_concurso_questoes.index', compact('provaConcursoQuestaos'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prova_concurso_questoes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProvaConcursoQuestaoRequest $request)
    {
        ProvaConcursoQuestao::create($request->validated());
        return redirect()->route('prova_concurso_questoes.index')
            ->with('success', 'Questão da Prova do Concurso criada com sucesso.');
    }    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProvaConcursoQuestao $provaConcursoQuestao)
    {
        return view('prova_concurso_questoes.edit', compact('provaConcursoQuestao'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProvaConcursoQuestaoRequest $request, ProvaConcursoQuestao $provaConcursoQuestao)
    {
        $provaConcursoQuestao->update($request->validated());
        return redirect()->route('prova_concurso_questoes.index')
            ->with('success', 'Questão da Prova do Concurso atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProvaConcursoQuestao $provaConcursoQuestao)
    {
        $provaConcursoQuestao->delete();
        return redirect()->route('prova_concurso_questoes.index')
            ->with('success', 'Questão da Prova do Concurso deletada com sucesso.');
    }
}
