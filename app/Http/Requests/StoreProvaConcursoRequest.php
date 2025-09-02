<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProvaConcursoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:255|unique:provas_concursos,nome',
            'descricao' => 'nullable|string',
            'data_prova' => 'required|date',
            'orgao_id' => 'required|exists:orgaos,id',
            'banca_id' => 'required|exists:bancas,id',
            'ativo' => 'required|boolean',
        ];
    }
}
