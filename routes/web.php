<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EpiController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('epis', EpiController::class);
