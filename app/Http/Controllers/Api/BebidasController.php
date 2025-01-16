<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bebidas;
use Illuminate\Http\Request;

class BebidasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listaBebidas = Bebidas::with(['categorias'])->get();
        
        return response()->json([
            'messaje' => 'Lista traida exitosamente',
            'ListaBebidas' => $listaBebidas,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevaBebida = new Bebidas;
        $nuevaBebida->nombreBebida = $request->nombreBebida;
        $nuevaBebida->descripcionBebida = $request->descripcionBebida;
        $nuevaBebida->precioBebida = $request->precioBebida;
        $nuevaBebida->idCategoriaBebida = $request->idCategoriaBebida;
        $nuevaBebida->save();

        return response()->json([
            'messaje'   => 'Nueva bebida creada exitosamente',
            'data'      => $nuevaBebida
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Bebidas $bebidas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bebidas $bebidas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bebidas $bebidas)
    {
        //
    }
}
