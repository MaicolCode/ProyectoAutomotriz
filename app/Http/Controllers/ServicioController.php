<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    

    public function listarServicios() {
        $services = Servicio::all();
        return view('services', ["servicios"=>$services]);        
    }

    public function index()
    {
        $services = Servicio::latest()->paginate(5);
        return view('services.index', ["services"=>$services]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function show($id)
    {        
        $todayDate = Carbon::now();
        $servicio = Servicio::findOrFail($id);        
        return view('services.info-service',["date"=>$todayDate,"servicio"=>$servicio]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validation = $request->validate([
            "se_nombre"=>"required",
            "se_descripcion"=>"required",
            "se_precio"=>"required",
            "se_image" =>"required"
        ]);

        Servicio::create($validation);
        toastr()->success('El servicio fue creado exitosamente!', 'Notificación');
        return redirect(route('service.index'));
    }
   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servicio $servicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            "se_nombre"=>"required",
            "se_descripcion"=>"required",
            "se_precio"=>"required",
            "se_image" =>"required"
        ]);

        $servicio=Servicio::find($id);
        $servicio->update($validation);
        toastr()->success('El servicio fue editado exitosamente!', 'Notificación');
        return redirect(route('service.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $servicio=Servicio::find($id);
        $servicio->delete();
        toastr()->success('El servicio fue eliminado exitosamente!', 'Notificación');
        return redirect(route('service.index'));
    }
}
