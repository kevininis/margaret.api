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

        return response()->json([
            'message' => 'Categorías traidas exitosamente',
            'ListaCategorias'    => $listaCategorias
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevaCategoria = new Categoria;
        $nuevaCategoria->nombreCategoria = $request->name;
        $nuevaCategoria->descripcioncategoria = $request->description;
        $nuevaCategoria->save();

        return response()->json([
            'message' => 'Categoria creada exitosamente',
        ], 200);
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
