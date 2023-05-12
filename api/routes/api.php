<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

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

// recordar que en la url se accedera mediante localhost:8000/api/rutaALaCualIr

Route::get('clientes', [ClienteController::class, "index"]);
Route::post('clientes', [ClienteController::class, "store"]);
Route::get('clientes/{id}', [ClienteController::class, "show"]);
Route::put('clientes/{id}', [ClienteController::class, "update"]);
Route::delete('clientes/{id}', [ClienteController::class, "destroy"]);
