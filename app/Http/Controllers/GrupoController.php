<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use App\Helpers\ApiResponse;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    public function index() {
        return response()->json(Grupo::with('productos')->get());
    }

    public function store(Request $request) {
        $request->validate(['nombre' => 'required|string|max:255']);
        $grupo = Grupo::create($request->all());
        return response()->json($grupo, 201);
    }

    public function show(Grupo $grupo) {
        return response()->json($grupo->load('productos'));
    }

    public function update(Request $request, Grupo $grupo) {
        $grupo->update($request->all());
        return response()->json($grupo);
    }

    public function destroy(Grupo $grupo) {
        $grupo->delete();
        return response()->json(null, 204);
    }
}
