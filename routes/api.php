<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SkinController;
use App\Http\Controllers\ElementoController;
use App\Http\Controllers\CombinacionController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\LogroController;

/**
 * 📌 API Routes
 *
 * Este archivo define las rutas de la API para los diferentes recursos de la aplicación.
 * Se utiliza el grupo de middleware "api" para gestionar las rutas.
 *
 * @package routes
 */

/**
 * 📌 Ruta protegida para obtener el usuario autenticado con Sanctum
 *
 * Esta ruta permite obtener información del usuario autenticado.
 * Solo está disponible si se usa autenticación con Laravel Sanctum.
 *
 * @return \Illuminate\Http\JsonResponse
 */
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return response()->json($request->user());
});

/**
 * 📌 Rutas para Usuarios
 *
 * Estas rutas permiten realizar operaciones CRUD en los usuarios.
 * Utiliza `apiResource` para manejar automáticamente los métodos index, store, show, update y destroy.
 */
Route::apiResource('users', UserController::class);

/**
 * 📌 Rutas para Skins
 *
 * Estas rutas permiten la gestión de las skins en la base de datos.
 */
Route::apiResource('skins', SkinController::class);

/**
 * 📌 Rutas para Elementos
 *
 * Estas rutas permiten la gestión de los elementos del juego.
 */
Route::apiResource('elementos', ElementoController::class);

/**
 * 📌 Rutas para Combinaciones
 *
 * Estas rutas permiten gestionar las combinaciones entre skins y elementos.
 */
Route::apiResource('combinaciones', CombinacionController::class);

/**
 * 📌 Rutas para Galería
 *
 * Estas rutas permiten la gestión de la galería de combinaciones guardadas por los usuarios.
 */
Route::apiResource('galeria', GaleriaController::class);

/**
 * 📌 Rutas para Logros
 *
 * Estas rutas permiten la gestión de los logros del juego.
 */
Route::apiResource('logros', LogroController::class);

/**
 * 📌 Extra: Asignación de logros a usuarios
 *
 * Esta ruta permite asignar manualmente un logro a un usuario.
 *
 * @param int $user ID del usuario
 * @param int $logro ID del logro
 * @return \Illuminate\Http\JsonResponse
 */
Route::post('users/{user}/logros/{logro}', [UserController::class, 'assignLogro']);
