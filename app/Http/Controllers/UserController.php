<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::all(), 200);
    }

    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']); // Encriptar la contraseña
        $user = User::create($data);
        return response()->json($user, 201);
    }

    public function show(User $user)
    {
        return response()->json($user, 200);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->validated();

        // Si se proporciona una nueva contraseña, la encriptamos antes de guardarla
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }

        $user->update($data);
        return response()->json($user, 200);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(null, 204);
    }

    public function assignLogro(User $user, Logro $logro)
    {
        $user->logros()->attach($logro->id, ['fecha_obtenido' => now()]);
        return response()->json(['message' => 'Logro asignado correctamente'], 200);
    }

}
