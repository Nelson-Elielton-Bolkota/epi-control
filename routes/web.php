<?php

use App\Http\Controllers\EntregaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EpiController;
use App\Http\Controllers\FuncionarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('epis', EpiController::class);
Route::get('/funcionarios', [FuncionarioController::class, 'index'])
    ->name('funcionarios.index');
Route::resource('entregas',EntregaController::class);