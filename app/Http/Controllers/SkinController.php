<?php

namespace App\Http\Controllers;

use App\Models\Skin;
use App\Http\Requests\StoreSkinRequest;
use App\Http\Requests\UpdateSkinRequest;
use Illuminate\Http\JsonResponse;

/**
 * Class SkinController
 *
 * Controlador para gestionar skins.
 *
 * @package App\Http\Controllers
 */
class SkinController extends Controller
{
    /**
     * Obtener todas las skins.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(Skin::all(), 200);
    }

    /**
     * Crear una nueva skin.
     *
     * @param StoreSkinRequest $request
     * @return JsonResponse
     */
    public function store(StoreSkinRequest $request): JsonResponse
    {
        $skin = Skin::create($request->validated());
        return response()->json($skin, 201);
    }

    /**
     * Mostrar una skin específica.
     *
     * @param Skin $skin
     * @return JsonResponse
     */
    public function show(Skin $skin): JsonResponse
    {
        return response()->json($skin, 200);
    }

    /**
     * Actualizar una skin existente.
     *
     * @param UpdateSkinRequest $request
     * @param Skin $skin
     * @return JsonResponse
     */
    public function update(UpdateSkinRequest $request, Skin $skin): JsonResponse
    {
        $skin->update($request->validated());
        return response()->json($skin, 200);
    }

    /**
     * Eliminar una skin.
     *
     * @param Skin $skin
     * @return JsonResponse
     */
    public function destroy(Skin $skin): JsonResponse
    {
        $skin->delete();
        return response()->json(null, 204);
    }
}
