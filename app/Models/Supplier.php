<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $table = 'suppliers';
    protected $fillable = ['name', 'company_name', 'cnpj'];
    protected $casts = [
        'name' => 'string',
        'company_name' => 'string',
        'cnpj' => 'string',
        'created_at' => 'datetime',
    ];
}
