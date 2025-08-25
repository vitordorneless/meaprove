<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Conhecimento extends Model
{
    /** @use HasFactory<\Database\Factories\ConhecimentoFactory> */
    use HasFactory, Notifiable;

    protected $fillable = [
        'nome_conhecimento',
        'descricao',
        'ativo',
    ];
}
