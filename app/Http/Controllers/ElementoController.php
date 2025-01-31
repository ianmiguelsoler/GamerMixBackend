<?php

namespace App\Http\Controllers;

use App\Models\Elemento;
use App\Http\Requests\StoreElementoRequest;
use App\Http\Requests\UpdateElementoRequest;
use Illuminate\Http\JsonResponse;

/**
 * Class ElementoController
 *
 * Controlador para gestionar los elementos del sistema.
 *
 * @package App\Http\Controllers
 */
class ElementoController extends Controller
{
    /**
     * Obtener todos los elementos.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(Elemento::all(), 200);
    }

    /**
     * Crear un nuevo elemento.
     *
     * @param StoreElementoRequest $request
     * @return JsonResponse
     */
    public function store(StoreElementoRequest $request): JsonResponse
    {
        $elemento = Elemento::create($request->validated());
        return response()->json($elemento, 201);
    }

    /**
     * Mostrar un elemento específico.
     *
     * @param Elemento $elemento
     * @return JsonResponse
     */
    public function show(Elemento $elemento): JsonResponse
    {
        return response()->json($elemento, 200);
    }

    /**
     * Actualizar un elemento existente.
     *
     * @param UpdateElementoRequest $request
     * @param Elemento $elemento
     * @return JsonResponse
     */
    public function update(UpdateElementoRequest $request, Elemento $elemento): JsonResponse
    {
        $elemento->update($request->validated());
        return response()->json($elemento, 200);
    }

    /**
     * Eliminar un elemento.
     *
     * @param Elemento $elemento
     * @return JsonResponse
     */
    public function destroy(Elemento $elemento): JsonResponse
    {
        $elemento->delete();
        return response()->json(null, 204);
    }
}
