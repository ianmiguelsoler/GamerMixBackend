<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use App\Http\Requests\StoreGaleriaRequest;
use App\Http\Requests\UpdateGaleriaRequest;
use Illuminate\Http\JsonResponse;

/**
 * Class GaleriaController
 *
 * Controlador para gestionar la galería de combinaciones guardadas por los usuarios.
 *
 * @package App\Http\Controllers
 */
class GaleriaController extends Controller
{
    /**
     * Obtener todas las entradas de la galería.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(Galeria::all(), 200);
    }

    /**
     * Crear una nueva entrada en la galería.
     *
     * @param StoreGaleriaRequest $request
     * @return JsonResponse
     */
    public function store(StoreGaleriaRequest $request): JsonResponse
    {
        $galeria = Galeria::create($request->validated());
        return response()->json($galeria, 201);
    }

    /**
     * Mostrar una entrada específica de la galería.
     *
     * @param Galeria $galeria
     * @return JsonResponse
     */
    public function show(Galeria $galeria): JsonResponse
    {
        return response()->json($galeria, 200);
    }

    /**
     * Actualizar una entrada de la galería.
     *
     * @param UpdateGaleriaRequest $request
     * @param Galeria $galeria
     * @return JsonResponse
     */
    public function update(UpdateGaleriaRequest $request, Galeria $galeria): JsonResponse
    {
        $galeria->update($request->validated());
        return response()->json($galeria, 200);
    }

    /**
     * Eliminar una entrada de la galería.
     *
     * @param Galeria $galeria
     * @return JsonResponse
     */
    public function destroy(Galeria $galeria): JsonResponse
    {
        $galeria->delete();
        return response()->json(null, 204);
    }
}
