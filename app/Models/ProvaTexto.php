<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ProvaTexto extends Model
{
    /** @use HasFactory<\Database\Factories\ProvaTextoFactory> */
    use HasFactory, Notifiable;

    protected $fillable = [
        'prova_concurso_id',
        'prova_concurso_questaos_id',
        'materia_id',
        'texto_prova',
        'ativo',
    ];

    public function provaConcurso()
    {
        return $this->belongsTo(ProvaConcurso::class);
    }

    public function provaConcursoQuestao()
    {
        return $this->belongsTo(ProvaConcursoQuestao::class);
    }

    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }
}
