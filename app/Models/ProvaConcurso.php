<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ProvaConcurso extends Model
{
    /** @use HasFactory<\Database\Factories\ProvaConcursoFactory> */
    use HasFactory, Notifiable;

    protected $fillable = [
        'orgao_id',
        'banca_id',
        'cargo',
        'edital',
        'data_prova_concurso',
        'ativo',
    ];

    public function orgao()
    {
        return $this->belongsTo(Orgao::class);
    }

    public function banca()
    {
        return $this->belongsTo(Banca::class);
    }
}
