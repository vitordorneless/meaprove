<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ProvaConcursoQuestao extends Model
{
    /** @use HasFactory<\Database\Factories\ProvaConcursoQuestaoFactory> */
    use HasFactory, Notifiable;

    protected $fillable = [
        'prova_concurso_id',
        'tipo_prova_id',
        'materia_id',
        'enunciado_questao',
        'alternativa_a',
        'alternativa_b',
        'alternativa_c',
        'alternativa_d',
        'alternativa_e',
        'resposta_correta',
        'ativo',
    ];

    public function provaConcurso()
    {
        return $this->belongsTo(ProvaConcurso::class);
    }

    public function tipoProva()
    {
        return $this->belongsTo(TipoProva::class);
    }

    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }
}
