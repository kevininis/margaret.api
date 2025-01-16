<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Estados;
use Illuminate\Http\Request;

class EstadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevoEstado = new Estados;
        $nuevoEstado->nombreEstado = $request->nombreEstado;
        $nuevoEstado->descripcionEstado = $request->escripcionEstado;
        $nuevoEstado->save();

        return response()->json([
            'message' => 'Estado creado exitosamente'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Estados $estados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estados $estados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estados $estados)
    {
        //
    }
}
