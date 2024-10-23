<?php

namespace App\Http\Controllers;

use App\Models\Peticion;
use App\Models\PeticionCotiza;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PeticionCotizaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peticionesCotiza = PeticionCotiza::latest()->paginate(5);
        return view('cotizaciones.peticion-cotizaciones', ['peticionesCotiza'=>$peticionesCotiza]);
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
    public function store(Request $request)//: RedirectResponse
    {
        $date = strtotime($request->dia_selec);
        $strDate = date('Y-m-d',$date);
        
        $validated = $request->validate([
            "Cedula"=>"required|string|min:10",
            "Nombres"=>"required|string",
            "Correo"=>"required|string",
            "Direccion"=>"required|string",
            "Telefono"=>"required|string",
            "Servicio"=>"required|string",
            "Estado"=>"string",
            "Precio"=>"required",
        ]);   
        
        
        PeticionCotiza::create($validated);

        PeticionCotiza::where('dia_selec',null)->update(['dia_selec'=>$strDate]);

        toastr()->success('Su petición a sido registrada con éxito!', 'Notificación');

        return redirect(route('service')); 
    }

    /**
     * Display the specified resource.
     */
    public function show(PeticionCotiza $peticionCotiza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PeticionCotiza $peticionCotiza)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $peticionCotiza = PeticionCotiza::find($request->id);

        $peticionCotiza->Estado = $request->Estado;

        $peticionCotiza->save();
        return response()->json(['status'=>'success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PeticionCotiza $peticionCotiza)
    {
        //
    }
}
