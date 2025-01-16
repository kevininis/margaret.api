<?php

use App\Http\Controllers\Api\BebidasController;
use App\Http\Controllers\Api\CategoriasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\MesasController; 

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/register', [RegisterController::class, 'store'])->name('api.v1.register');

// CATEGORIAS
Route::post('/nuevaCategoria', [CategoriasController::class, 'store'])->name('nuevaCategoria');
Route::get('/listaCategorias', [CategoriasController::class, 'index']);

//mesas
Route::get('mesas', [MesasController::class, 'index'])->name('api.v1.mesas.index');
Route::post('mesas', [MesasController::class, 'store'])->name('api.v1.mesas.store');
Route::put('mesas', [MesasController::class, 'update'])->name('api.v1.mesas.update');
Route::delete('mesas', [MesasController::class, 'destroy'])->name('api.v1.mesas.destroy');

// bebidas
Route::post('/nuevaBebida', [BebidasController::class, 'store'])->name('nuevaBebida');
Route::get('/listaBebidas', [BebidasController::class, 'index'])->name('listaBebias');
Route::put('/modificarBebida', [BebidasController::class, 'update']);