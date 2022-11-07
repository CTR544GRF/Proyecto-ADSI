<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tbl_registros;
use App\Models\tbl_articulos;

class entradas extends Controller
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
     
        $entradas = new tbl_registros();
        $entradas->cod_articulo = $request->cod_articulo;
        $entradas->tipo = "entrada";
        $entradas->cantidad = $request->cantidad;
        $entradas->causal = $request->causal;
        $entradas->num_factura = $request->num_factura;
        $entradas->save();
        return redirect()->route('post_reg_entrada') -> with('guardado', 'Tarea creada correctamente');
    }

    public function index() {

        $entradas = tbl_registros::all();
        return view('entradas.entradas', compact('entradas'));
    }

    public function index2(){
        $articulos_view = tbl_articulos::all();
        return view('entradas.registrar_entrada', compact('articulos_view'));
    }

}
