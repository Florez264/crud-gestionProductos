<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Grupo;
use App\Helpers\ApiResponse;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index() {
        $productos = Producto::with('grupos')->get();
        return ApiResponse::success("Lista de productos obtenida exitosamente", $productos);
    }

    public function store(Request $request) {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
            'estado' => 'boolean'
        ]);

        $producto = Producto::create($request->all());
        return ApiResponse::success("Producto creado exitosamente", $producto, 201);
    }

    public function show(Producto $producto) {
        return ApiResponse::success("Producto obtenido exitosamente", $producto->load('grupos'));
    }

    public function update(Request $request, Producto $producto) {
        $producto->update($request->all());
        return ApiResponse::success("Producto actualizado correctamente", $producto);
    }

    public function destroy(Producto $producto) {
        $producto->delete();
        return ApiResponse::success("Producto eliminado correctamente");
    }

    public function asignarGrupo(Producto $producto, Grupo $grupo) {
        $producto->grupos()->attach($grupo->id);
        return ApiResponse::success("Producto asignado al grupo correctamente");
    }

    public function removerGrupo(Producto $producto, Grupo $grupo) {
        $producto->grupos()->detach($grupo->id);
        return ApiResponse::success("Producto removido del grupo correctamente");
    }
}
