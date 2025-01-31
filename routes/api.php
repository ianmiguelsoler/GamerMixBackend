<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SkinController;
use App\Http\Controllers\ElementoController;
use App\Http\Controllers\CombinacionController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\LogroController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Aquí es donde se registran las rutas de la API. Estas rutas están
| cargadas por el RouteServiceProvider y todas serán asignadas al
| grupo de middleware "api".
|
*/

// Ruta protegida para obtener el usuario autenticado con Sanctum (si usas autenticación)
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// 📌 Rutas para Usuarios
Route::apiResource('users', UserController::class);

// 📌 Rutas para Skins
Route::apiResource('skins', SkinController::class);

// 📌 Rutas para Elementos
Route::apiResource('elementos', ElementoController::class);

// 📌 Rutas para Combinaciones
Route::apiResource('combinaciones', CombinacionController::class);

// 📌 Rutas para Galería
Route::apiResource('galeria', GaleriaController::class);

// 📌 Rutas para Logros
Route::apiResource('logros', LogroController::class);

// 📌 Extra: Ruta para asignar logros a usuarios manualmente
Route::post('users/{user}/logros/{logro}', [UserController::class, 'assignLogro']);
