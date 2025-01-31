<?php

namespace App\Http\Controllers;

use App\Models\Combinacion;
use App\Http\Requests\StoreCombinacionRequest;
use App\Http\Requests\UpdateCombinacionRequest;
use Illuminate\Http\Response;

class CombinacionController extends Controller
{
    public function index()
    {
        return response()->json(Combinacion::all(), 200);
    }

    public function store(StoreCombinacionRequest $request)
    {
        $combinacion = Combinacion::create($request->validated());
        return response()->json($combinacion, 201);
    }

    public function show(Combinacion $combinacion)
    {
        return response()->json($combinacion, 200);
    }

    public function update(UpdateCombinacionRequest $request, Combinacion $combinacion)
    {
        $combinacion->update($request->validated());
        return response()->json($combinacion, 200);
    }

    public function destroy(Combinacion $combinacion)
    {
        $combinacion->delete();
        return response()->json(null, 204);
    }
}
