<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores';

    protected $fillable = ['nome', 'razao_social', 'cnpj'];

    protected $casts = [
        'nome' => 'string',
        'razao_social' => 'string',
        'cnpj' => 'string',
        'created_at' => 'datetime',
    ];
}
