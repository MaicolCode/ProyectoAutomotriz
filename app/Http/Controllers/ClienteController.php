<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::latest()->paginate(5);
        return view('clientes.index',['clientes'=>$clientes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validation = $request->validate([
            "id" => "required|string|min:10",
            "Nombre" => "required",
            "Correo" => "required",
            "Direccion" => "required",
            "Telefono" => "required",
        ]);

        $cliente = Cliente::where('id', $request->id)->count();
        if($cliente == 1){
            toastr()->error('Ya exite un usuario con la cedula '.$request->id.'.', 'Notificación');
            return redirect(route('cliente.index'));
        } else {
            Cliente::create($validation);
            toastr()->success('El registro fue realizado con éxito!', 'Notificación');
            return redirect(route('cliente.index'));
        }
        
    }

    /**
     * Aqui se vizualiza los datos del cliente.
     */
    public function show(Request $request)
    {
        $clientes = Cliente::find($request->cliente);
        return $clientes;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $validation = $request->validate([
            "id" => "required",
            "Nombre" => "required",
            "Correo" => "required",
            "Direccion" => "required",
            "Telefono" => "required",
        ]);

        $cliente->update($validation);
        toastr()->success('El registro fue editado exitosamente!', 'Notificación');
        return redirect(route('cliente.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Cliente $cliente): RedirectResponse
    {
        $cliente->delete();
        toastr()->success('El cliente se elimino exitosamente!', 'Notificación');
        return redirect(route('cliente.index'));
    }
}
