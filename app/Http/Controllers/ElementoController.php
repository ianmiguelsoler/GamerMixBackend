<?php

namespace App\Http\Controllers;

use App\Models\Elemento;
use App\Http\Requests\StoreElementoRequest;
use App\Http\Requests\UpdateElementoRequest;
use Illuminate\Http\Response;

class ElementoController extends Controller
{
    public function index()
    {
        return response()->json(Elemento::all(), 200);
    }

    public function store(StoreElementoRequest $request)
    {
        $elemento = Elemento::create($request->validated());
        return response()->json($elemento, 201);
    }

    public function show(Elemento $elemento)
    {
        return response()->json($elemento, 200);
    }

    public function update(UpdateElementoRequest $request, Elemento $elemento)
    {
        $elemento->update($request->validated());
        return response()->json($elemento, 200);
    }

    public function destroy(Elemento $elemento)
    {
        $elemento->delete();
        return response()->json(null, 204);
    }
}
