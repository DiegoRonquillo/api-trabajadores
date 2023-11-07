<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Trabajadores\TrabajadoresController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/obtenerTrabajadores', [TrabajadoresController::class, 'obtenerTrabajadores']);
Route::post('/insertarTrabajador', [TrabajadoresController::class, 'insertarTrabajador']);
Route::post('/eliminarTrabajadores', [TrabajadoresController::class, 'eliminarTrabajadores']);