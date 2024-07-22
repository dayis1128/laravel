<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SaludoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController:: class, 'index'])->name('home');


Route::get('/saludo', [SaludoController::class, 'saludito']);
Route::resource('/productos', ProductoController::class);
Route::resource('/clientes', ClienteController::class);
