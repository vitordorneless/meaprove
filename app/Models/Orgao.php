<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Orgao extends Model
{
    /** @use HasFactory<\Database\Factories\OrgaoFactory> */
    use HasFactory, Notifiable;

    protected $fillable = [
        'nome_orgao',
        'ativo',
    ];
}
