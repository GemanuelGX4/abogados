<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbogadoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('abogados', AbogadoController::class);
