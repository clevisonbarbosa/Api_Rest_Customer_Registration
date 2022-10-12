<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;


Route::get('/clientes', [ClienteController::class, 'index']); // Rota Principal.
Route::post('/clientes', [ClienteController::class, 'store']); // Envia dados para o banco de dados.
Route::get('clientes/{id}', [ClienteController::class, 'show']); // Trazer dados do banco de dados.