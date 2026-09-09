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
    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class);
    }
    public function epi()
    {
        return $this->belongsTo(Epi::class);
    }
}
