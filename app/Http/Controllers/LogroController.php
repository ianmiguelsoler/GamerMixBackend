<?php

namespace App\Http\Controllers;

use App\Models\Logro;
use App\Http\Requests\StoreLogroRequest;
use App\Http\Requests\UpdateLogroRequest;
use Illuminate\Http\Response;

class LogroController extends Controller
{
    public function index()
    {
        return response()->json(Logro::all(), 200);
    }

    public function store(StoreLogroRequest $request)
    {
        $logro = Logro::create($request->validated());
        return response()->json($logro, 201);
    }

    public function show(Logro $logro)
    {
        return response()->json($logro, 200);
    }

    public function update(UpdateLogroRequest $request, Logro $logro)
    {
        $logro->update($request->validated());
        return response()->json($logro, 200);
    }

    public function destroy(Logro $logro)
    {
        $logro->delete();
        return response()->json(null, 204);
    }
}
