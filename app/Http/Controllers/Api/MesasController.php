<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Mesas;
use Illuminate\Http\Request;

class MesasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mesas = Mesas::with(['comandas'])->all();
        return $mesas;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'numeroMesa' => 'required|integer',
            'numeroAsientos' => 'required|integer'
        ]);

        $mesas = new Mesas;
        $mesas->numeroMesa = $request->numeroMesa;
        $mesas->numeroAsientos = $request->numeroAsientos;
        $mesas->save();

        return response()->json([
            'messaje'   => 'Mesa creada exitosamente',
            'datosMesa' => $mesas,
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Mesas $mesas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mesas $mesas)
    {

            $ModificarMesa = Mesas::find($request->idMesa);
            $ModificarMesa->numeroMesa = $request->numeroMesa;
            $ModificarMesa->numeroAsientos = $request->numeroAsientos;
            $ModificarMesa->save();
            
            return response()->json([
                'messaje'   => 'Mesa modificada exitosamente',
                'datosMesa' => $ModificarMesa,
            ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mesas $mesas)
    {
        //
    }
}
