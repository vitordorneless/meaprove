<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Materia extends Model
{
    /** @use HasFactory<\Database\Factories\MateriaFactory> */
    use HasFactory, Notifiable;

    protected $fillable = [
        'conhecimento_id',
        'nome_materia',
        'ativo',
    ];

    public function conhecimento()
    {
        return $this->belongsTo(Conhecimento::class);
    }
}
