<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Banca extends Model
{
    /** @use HasFactory<\Database\Factories\BancaFactory> */
    use HasFactory, Notifiable;

    protected $fillable = [
        'nome_banca', 
        'ativo',
    ];
}
