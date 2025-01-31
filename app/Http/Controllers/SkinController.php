<?php

namespace App\Http\Controllers;

use App\Models\Skin;
use App\Http\Requests\StoreSkinRequest;
use App\Http\Requests\UpdateSkinRequest;
use Illuminate\Http\Response;

class SkinController extends Controller
{
    public function index()
    {
        return response()->json(Skin::all(), 200);
    }

    public function store(StoreSkinRequest $request)
    {
        $skin = Skin::create($request->validated());
        return response()->json($skin, 201);
    }

    public function show(Skin $skin)
    {
        return response()->json($skin, 200);
    }

    public function update(UpdateSkinRequest $request, Skin $skin)
    {
        $skin->update($request->validated());
        return response()->json($skin, 200);
    }

    public function destroy(Skin $skin)
    {
        $skin->delete();
        return response()->json(null, 204);
    }
}
