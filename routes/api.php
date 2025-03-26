<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\ProductoController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('productos')->group(function () {
    Route::get('/list-product', [ProductoController::class, 'index']); 
    Route::post('/create-product', [ProductoController::class, 'store']); 
    Route::get('/get/{producto}', [ProductoController::class, 'show']); 
    Route::put('/update/{producto}', [ProductoController::class, 'update']); 
    Route::delete('/delete/{producto}', [ProductoController::class, 'destroy']); 
    Route::post('/asignar/{producto}/grupos/{grupo}', [ProductoController::class, 'asignarGrupo']); 
    Route::delete('/removerGrupo/{producto}/grupos/{grupo}', [ProductoController::class, 'removerGrupo']); 
});

Route::prefix('grupos')->group(function () {
    Route::get('/list-grup', [GrupoController::class, 'index']); 
    Route::post('/create-grup', [GrupoController::class, 'store']); 
    Route::get('/get/{grupo}', [GrupoController::class, 'show']); 
    Route::put('/update-grup/{grupo}', [GrupoController::class, 'update']); 
    Route::delete('/delete-grup/{grupo}', [GrupoController::class, 'destroy']); 
});