<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserapiController;
use App\Http\Controllers\Api\AuthController;

// Ruta para registrar un nuevo usuario
Route::post('register', [AuthController::class, 'register']);

// Ruta para iniciar sesión
Route::post('login', [AuthController::class, 'login']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('users', UserapiController::class);
