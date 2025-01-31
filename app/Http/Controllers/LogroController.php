<?php

namespace App\Http\Controllers;

use App\Models\Logro;
use App\Http\Requests\StoreLogroRequest;
use App\Http\Requests\UpdateLogroRequest;
use Illuminate\Http\JsonResponse;

/**
 * Class LogroController
 *
 * Controlador para gestionar logros.
 *
 * @package App\Http\Controllers
 */
class LogroController extends Controller
{
    /**
     * Obtener todos los logros.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(Logro::all(), 200);
    }

    /**
     * Crear un nuevo logro.
     *
     * @param StoreLogroRequest $request
     * @return JsonResponse
     */
    public function store(StoreLogroRequest $request): JsonResponse
    {
        $logro = Logro::create($request->validated());
        return response()->json($logro, 201);
    }

    /**
     * Mostrar un logro específico.
     *
     * @param Logro $logro
     * @return JsonResponse
     */
    public function show(Logro $logro): JsonResponse
    {
        return response()->json($logro, 200);
    }

    /**
     * Actualizar un logro existente.
     *
     * @param UpdateLogroRequest $request
     * @param Logro $logro
     * @return JsonResponse
     */
    public function update(UpdateLogroRequest $request, Logro $logro): JsonResponse
    {
        $logro->update($request->validated());
        return response()->json($logro, 200);
    }

    /**
     * Eliminar un logro.
     *
     * @param Logro $logro
     * @return JsonResponse
     */
    public function destroy(Logro $logro): JsonResponse
    {
        $logro->delete();
        return response()->json(null, 204);
    }
}
