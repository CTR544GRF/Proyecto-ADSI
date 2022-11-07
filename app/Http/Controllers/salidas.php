<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tbl_articulos;
use App\Models\tbl_registros;
use Illuminate\Http\Request;


class salidas extends Controller
{
    public function store(Request $request)
    {   
       /* El validate funciona, pero los datos que se estan enviando no cumplen    */
       $request->validate([
            'cod_articulo' => 'required|max:10',
            'tipo' => 'required|max:30',
            'cantidad' => 'required|max:20',
            'causal' => 'required|max:100',
            'num_factura' => 'max:50',
        ]);
     
        $salidas = new tbl_registros();
        $salidas->cod_articulo = $request->cod_articulo;
        $salidas->tipo = "Salida";
        $salidas->cantidad = $request->cantidad;
        $salidas->causal = $request->causal;
        $salidas->num_factura = $request->num_factura;
        $salidas->save();
        return redirect()->route('post_reg_salidas') -> with('guardado', 'Tarea creada correctamente');
    }

    public function index() {

        $salidas = tbl_registros::all();
        return view('salidas.salidas', compact('salidas'));
    }

    public function index2(){
        $articulos_view = tbl_articulos::all();
        return view('salidas.registrar_salida', compact('articulos_view'));
    }
}
