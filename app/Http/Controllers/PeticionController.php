<?php

namespace App\Http\Controllers;

use App\Models\Peticion;
use Illuminate\Http\Request;

class PeticionController extends Controller
{
    /**
     * Show the section created in the views
     */
    public function index() {
        $peticiones = Peticion::latest()->paginate(5);
        return view('buzon.ibuzon',compact('peticiones'));
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
        //
    }

    /**
     * Display a listing of the resource.
     */
    public function peticionAsunto(Request $request){
        $validated = $request->validate([
            "nombre_c" => "required",
            "telefono_c" => "required",
            "asunto_c" => "required",
            "mensaje_c" => "required",
        ]);

        Peticion::create($validated);

        return response()->json(['status'=>'success']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peticion $peticion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $peticion_buzon = Peticion::find($request->id);

        $peticion_buzon->state_p = $request->state_p;

        $peticion_buzon->save();
        return response()->json(['status'=>'success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peticion $peticion)
    {
        //
    }
}
