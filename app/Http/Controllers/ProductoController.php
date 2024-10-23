<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function buscarProductos(Request $request) {

        $productos = Producto::where('id','like','%'.$request->producto_id.'%');
        if($productos->count() >= 1){
            return $productos->get();
        }else {
            return response()->json([
                'message'=>'No existe'
            ]);
        };
    }
}
