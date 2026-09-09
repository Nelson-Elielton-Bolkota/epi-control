<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Entrega;

class Epi extends Model
{
    protected $fillable = [
    'nome',
    'tipo',
    'ca',
    'fabricante',
    'quantidade',
    'validade',
    'status'
    ];
    public function entregas()
    {
        return $this->hasMany(Entrega::class);
    }
}
