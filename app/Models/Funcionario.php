<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Entrega;

class Funcionario extends Model
{
    protected $fillable = [
    'nome',
    'cpf',
    'cargo',
    'setor',
    'data_admissao',
    'status'
    ];
    public function entregas()
    {
        return $this->hasMany(Entrega::class);
    }
}
