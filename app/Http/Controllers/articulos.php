<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tbl_articulos;

class articulos extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required|max:10',
            'nombre' => 'required|max:20',
            'material' => 'required|max:20',
            'talla' => 'required|max:10',
            'linea' => 'required|max:10',
            'uMedida' => 'required|max:10',
            'color' => 'required|max:10',
            'descripcion' => 'required|max:150'
        ]);

        $articulos = new tbl_articulos;
        $articulos->tipo_articulo = $request->tipo;
        $articulos->nom_articulo = $request->nombre;
        $articulos->material_articulo = $request->material;
        $articulos->talla_articulo = $request->talla;
        $articulos->linea = $request->linea;
        $articulos->unidad_medida = $request->uMedida;
        $articulos->color_articulo = $request->color;
        $articulos->descripcion_articulo = $request->descripcion;
        $articulos->save();
        return redirect()->route('reg_articulo');
    }
}
