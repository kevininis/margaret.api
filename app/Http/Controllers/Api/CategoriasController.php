<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listaCategorias = Categoria::with(['bebidas'])->get();

        return $listaCategorias;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevaCategoria = new Categoria;
        $nuevaCategoria->nombreCategoria = $request->nombreCategoria;
        $nuevaCategoria->descripcioncategoria = $request->descripcionCategoria;
        $nuevaCategoria->save();

        return response()->json([
            'message' => 'Categoria creada exitosamente',
            'data'    => $nuevaCategoria
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        //
    }
}
