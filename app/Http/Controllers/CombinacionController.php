<?php

namespace App\Http\Controllers;

use App\Models\Combinacion;
use App\Http\Requests\StoreCombinacionRequest;
use App\Http\Requests\UpdateCombinacionRequest;
use Illuminate\Http\JsonResponse;

/**
 * Class CombinacionController
 *
 * Controlador para gestionar las combinaciones de skins y elementos.
 *
 * @package App\Http\Controllers
 */
class CombinacionController extends Controller
{
    /**
     * Obtener todas las combinaciones.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(Combinacion::all(), 200);
    }

    /**
     * Crear una nueva combinación.
     *
     * @param StoreCombinacionRequest $request
     * @return JsonResponse
     */
    public function store(StoreCombinacionRequest $request): JsonResponse
    {
        $combinacion = Combinacion::create($request->validated());
        return response()->json($combinacion, 201);
    }

    /**
     * Mostrar una combinación específica.
     *
     * @param Combinacion $combinacion
     * @return JsonResponse
     */
    public function show(Combinacion $combinacion): JsonResponse
    {
        return response()->json($combinacion, 200);
    }

    /**
     * Actualizar una combinación existente.
     *
     * @param UpdateCombinacionRequest $request
     * @param Combinacion $combinacion
     * @return JsonResponse
     */
    public function update(UpdateCombinacionRequest $request, Combinacion $combinacion): JsonResponse
    {
        $combinacion->update($request->validated());
        return response()->json($combinacion, 200);
    }

    /**
     * Eliminar una combinación.
     *
     * @param Combinacion $combinacion
     * @return JsonResponse
     */
    public function destroy(Combinacion $combinacion): JsonResponse
    {
        $combinacion->delete();
        return response()->json(null, 204);
    }
}
