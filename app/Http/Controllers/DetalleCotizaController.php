<?php

namespace App\Http\Controllers;

use App\Models\Detalle_Cotiza;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DetalleCotizaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cotiza = new Detalle_Cotiza;
        $cotiza->cotizacion_id = $request->cotizacion_id;
        $cotiza->producto_id = $request->producto_id;
        $cotiza->Descripcion = $request->Descripcion;
        $cotiza->Cantidad = $request->Cantidad;
        $cotiza->PUnitario = $request->PUnitario;
        $cotiza->Subtotal = $request->Subtotal;

        $cotiza->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Detalle_Cotiza $detalle_Cotiza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detalle_Cotiza $detalle_Cotiza)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Detalle_Cotiza $detalle_Cotiza)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Detalle_Cotiza::find($request->idDetalle)->delete();

        return "La accion fue realizada exitosamente!";
    }
}
