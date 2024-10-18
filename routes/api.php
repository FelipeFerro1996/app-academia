<?php

use App\Http\Controllers\Clientes\ClientesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('clientes')->group(function(){
    Route::get('/', [ClientesController::class, 'index']);
});
