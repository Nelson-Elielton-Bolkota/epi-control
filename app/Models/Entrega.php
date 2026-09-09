<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    protected $fillable = [
    'funcionario_id',
    'epi_id',
    'quantidade',
    'data_entrega',
    'data_devolucao',
    'observacao'
    ];
}
