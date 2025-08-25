<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class TipoProva extends Model
{
    /** @use HasFactory<\Database\Factories\TipoProvaFactory> */
    use HasFactory, Notifiable;

    protected $fillable = [
        'nome_tipo_prova',
        'ativo',
    ];
}
