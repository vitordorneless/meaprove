<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrgaoRequest;
use App\Http\Requests\UpdateOrgaoRequest;
use App\Models\Orgao;

class OrgaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orgaos = Orgao::latest()->paginate(10);
        return view('orgaos.index', compact('orgaos'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orgaos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrgaoRequest $request)
    {
        Orgao::create($request->validated());
        return redirect()->route('orgaos.index')
            ->with('success', 'Órgão criado com sucesso.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orgao $orgao)
    {
        return view('orgaos.edit', compact('orgao'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrgaoRequest $request, Orgao $orgao)
    {
        $orgao->update($request->validated());
        return redirect()->route('orgaos.index')
            ->with('success', 'Órgão atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orgao $orgao)
    {
        $orgao->delete();
        return redirect()->route('orgaos.index')
            ->with('success', 'Órgão deletado com sucesso.');
    }
}
