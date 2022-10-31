<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tbl_registros;

class salidas extends Controller
{
    public function store(Request $request)
    {   
       /* El validate funciona, pero los datos que se estan enviando no cumplen    */
        $a= $request->validate([
            'cod_articulo' => 'required|max:10',
            'tipo' => 'required|max:30',
            'cantidad' => 'required|max:20',
            'causal' => 'required|max:50',
            'num_factura' => 'required|max:50',
        ]);
     
        $salidas = new tbl_registros();
        $salidas->cod_articulo = $request->cod_articulo;
        $salidas->tipo = "Salida";
        $salidas->cantidad = $request->cantidad;
        $salidas->causal = $request->causal_salida;
        $salidas->num_factura = $request->num_factura;
        $salidas->save();
        return redirect()->route('post_reg_salidas') -> with('guardado', 'Tarea creada correctamente');
    }

    public function index() {

        $usuarios = tbl_registros::all();
        return view('salidas.salidas', compact('salidass'));
    }
}
