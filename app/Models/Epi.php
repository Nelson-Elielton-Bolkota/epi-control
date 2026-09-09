<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
