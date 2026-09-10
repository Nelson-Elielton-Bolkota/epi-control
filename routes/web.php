<?php

use App\Http\Controllers\EntregaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EpiController;
use App\Http\Controllers\FuncionarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('epis', EpiController::class);
Route::resource('funcionarios',FuncionarioController::class);
Route::resource('entregas',EntregaController::class);