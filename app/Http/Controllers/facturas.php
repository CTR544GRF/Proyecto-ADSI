<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tbl_facturas;
use Illuminate\Http\Request;

class facturas extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'valor_uniario' => 'required|max:10|integer',
            'cantidad' => 'required|max:10|integer',
            'iva' => 'required|max:3|integer',
            'descripcion' => 'required|max:150|string'
        ]);

        $calculo = ($request->cantidad) * ($request->valor_unitario);
        $subtotal = $calculo * ($request->iva);
        $facturas = new tbl_facturas();
        $facturas->fecha = $request->fecha;
        $facturas->tipo_factura = $request->tipo_factura;
        $facturas->valor_unitario = $request->valor_unitario;
        $facturas->cantidad = $request->cantidad;
        $facturas->subtotal = $subtotal;
        $facturas->linea = $request->linea;
        $facturas->unidad_medida = $request->uMedida;
        $facturas->color_articulo = $request->color;
        $facturas->descripcion_articulo = $request->descripcion;
        $facturas->save();
        return redirect()->route('reg_articulo');
    }

    public function index(){
        $facturas_view = tbl_facturas::all();
        return view('Facturas.facturas',compact('facturas_view'));
    }
    public function edit(tbl_facturas $factura)
    {
        return view('Facturas.editar_factura', compact('factura'));
    }
}
