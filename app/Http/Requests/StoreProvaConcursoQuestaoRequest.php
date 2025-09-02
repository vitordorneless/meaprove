<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProvaConcursoQuestaoRequest extends FormRequest
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
            'prova_concurso_id' => 'required|exists:provas_concursos,id',
            'questao_id' => 'required|exists:questaos,id',
            'ordem' => 'required|integer|min:1',
            'peso' => 'required|numeric|min:0',
            'ativo' => 'required|boolean',
        ];
    }
}
