<?php

namespace App\Http\Controllers;

use App\Models\Cotizacion;
use App\Models\Detalle_Cotiza;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
//Dependenicia del PDF
use Barryvdh\DomPDF\Facade\Pdf;

class CotizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cotizaciones = Cotizacion::latest()->paginate(5);
        return view('cotizaciones.index', ["cotizaciones"=>$cotizaciones]);
    }

    //Metodo para mostrar las cotizaciones generadas en PDF.
    public function cotizaPDF() {
        $cotizaciones = Cotizacion::all();
        $totalCotizas = $cotizaciones->sum('Total');
        $numero = $cotizaciones->count();
        $pdf = Pdf::loadView('cotizaciones.pdfCotizaciones', ["cotizaciones"=>$cotizaciones, "total" => $totalCotizas, "numero"=>$numero]);
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $todayDate = Carbon::now()->format('Y-m-d');
        $detalles = Detalle_Cotiza::whereNull('cotizacion_id')->get();
        $total = $detalles->sum('Subtotal');
        return view('cotizaciones.create',[ 'date'=>$todayDate, 'detalles'=>$detalles, 'Subtotal'=>$total]);
    }

    /**
     * Creacion de la cotiza y actualizacion del id en los Detalles de la cotiza.
     */
    public function store(Request $request): RedirectResponse
    { 
        $validated = $request->validate([
            "cliente_id"=>"required",
            "Cliente"=>"required",
            "CCorreo"=>"required",
            "CTelefono"=>"required",
            "FCreacion"=>"required",
            "Subtotal_C"=>"required",
            "IVA"=>"required",
            "Total"=>"required",
        ]); 
        
        Cotizacion::create($validated);
        //Obtener ultimo registro de las cotizaciones con first.
        $idCotiza = Cotizacion::select('id')->orderBy('id', 'desc')->first();
        
        //Actualizacion de la id de la cotiza en el/los detalles.
        Detalle_Cotiza::where('cotizacion_id', null)->update(['cotizacion_id'=>$idCotiza->id]);
        toastr()->success('La cotizacion fue creada exitosamente!', 'Notificación');
        return redirect(route('cotizacion.index'));
    }

    /**
     * Metodo para la edicion de la cotización seleccionada.
     */
    public function edit(Cotizacion $cotizacion)
    {
        $todayDate = $cotizacion->FCreacion;
        $detalles = Detalle_Cotiza::where('cotizacion_id',$cotizacion->id)->get();
        $total = $detalles->sum('Subtotal');
        return view('cotizaciones.edit',[ 'date'=>$todayDate, 'detalles'=>$detalles, 'Subtotal'=>$total, "cotizacion"=>$cotizacion]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cotizacion $cotizacion)
    {
        $validated = $request->validate([
            "cliente_id"=>"required",
            "Cliente"=>"required",
            "CCorreo"=>"required",
            "CTelefono"=>"required",
            "FCreacion"=>"required",
            "Subtotal_C"=>"required",
            "IVA"=>"required",
            "Total"=>"required",
        ]); 
        
        $cotizacion->update($validated);
        toastr()->success('La cotizacion fue editada exitosamente!', 'Notificación');
        return redirect(route('cotizacion.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cotizacion $cotizacion)
    {
        $cotizacion->delete();
        toastr()->success('La cotizacion fue eliminada exitosamente!', 'Notificación');
        return redirect(route('cotizacion.index'));
    }
}
