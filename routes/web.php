<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EpiController;
use App\Http\Controllers\FuncionarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('epis', EpiController::class);
Route::resourse('funcionarios',FuncionarioController::class);