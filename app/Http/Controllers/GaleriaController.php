<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use App\Http\Requests\StoreGaleriaRequest;
use App\Http\Requests\UpdateGaleriaRequest;
use Illuminate\Http\Response;

class GaleriaController extends Controller
{
    public function index()
    {
        return response()->json(Galeria::all(), 200);
    }

    public function store(StoreGaleriaRequest $request)
    {
        $galeria = Galeria::create($request->validated());
        return response()->json($galeria, 201);
    }

    public function show(Galeria $galeria)
    {
        return response()->json($galeria, 200);
    }

    public function update(UpdateGaleriaRequest $request, Galeria $galeria)
    {
        $galeria->update($request->validated());
        return response()->json($galeria, 200);
    }

    public function destroy(Galeria $galeria)
    {
        $galeria->delete();
        return response()->json(null, 204);
    }
}
