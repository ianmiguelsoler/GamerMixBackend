<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Logro;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserController
 *
 * Controlador para gestionar usuarios.
 *
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Obtener todos los usuarios.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(User::all(), 200);
    }

    /**
     * Crear un nuevo usuario.
     *
     * @param StoreUserRequest $request
     * @return JsonResponse
     */
    public function store(StoreUserRequest $request): JsonResponse
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']); // Encriptar la contraseña
        $user = User::create($data);
        return response()->json($user, 201);
    }

    /**
     * Mostrar un usuario específico.
     *
     * @param User $user
     * @return JsonResponse
     */
    public function show(User $user): JsonResponse
    {
        return response()->json($user, 200);
    }

    /**
     * Actualizar un usuario existente.
     *
     * @param UpdateUserRequest $request
     * @param User $user
     * @return JsonResponse
     */
    public function update(UpdateUserRequest $request, User $user): JsonResponse
    {
        $data = $request->validated();

        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }

        $user->update($data);
        return response()->json($user, 200);
    }

    /**
     * Eliminar un usuario.
     *
     * @param User $user
     * @return JsonResponse
     */
    public function destroy(User $user): JsonResponse
    {
        $user->delete();
        return response()->json(null, 204);
    }

    /**
     * Asignar un logro a un usuario.
     *
     * @param User $user
     * @param Logro $logro
     * @return JsonResponse
     */
    public function assignLogro(User $user, Logro $logro): JsonResponse
    {
        $user->logros()->attach($logro->id, ['fecha_obtenido' => now()]);
        return response()->json(['message' => 'Logro asignado correctamente'], 200);
    }
}
