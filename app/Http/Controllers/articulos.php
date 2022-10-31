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
            'tipo' => 'required|min:4|max:10|alpha',
            'nombre' => 'required|min:4|max:20|alpha',
            'material' => 'required|min:4|max:20|alpha',
            'talla' => 'required|max:10',
            'linea' => 'required|min:4|max:10|alpha',
            'uMedida' => 'required|min:4|max:10|alpha',
            'color' => 'required|min:4|max:10|alpha',
            'descripcion' => 'max:150|string'
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

        return redirect()->route('reg_articulo')->with('guardado', 'El Articulo a sido guardado con exito');
    }
    public function index()
    {
        $articulos_view = tbl_articulos::all();
        return view('Articulos.articulos', compact('articulos_view'));
    }

    public function edit(tbl_articulos $articulo)
    {

        return view('Articulos.editar_articulo', compact('articulo'));
    }
    public function update(Request $request, tbl_articulos $articulo)
    {
        $request->validate([
            'tipo' => 'required|max:10|alpha',
            'nombre' => 'required|max:20|alpha',
            'material' => 'required|max:20|alpha',
            'talla' => 'required|max:10',
            'linea' => 'required|max:10|alpha',
            'uMedida' => 'required|max:10|alpha',
            'color' => 'required|max:10|alpha',
            'descripcion' => 'max:150|string'
        ]);

        $articulo->tipo_articulo = $request->tipo;
        $articulo->nom_articulo = $request->nombre;
        $articulo->material_articulo = $request->material;
        $articulo->talla_articulo = $request->talla;
        $articulo->linea = $request->linea;
        $articulo->unidad_medida = $request->uMedida;
        $articulo->color_articulo = $request->color;
        $articulo->descripcion_articulo = $request->descripcion;
        $articulo->save();
        session()->flash('actualizado', 'El Articulo a sido editado con exito');
        return view('Articulos.editar_articulo', compact('articulo'));
    }
    public function destroy(tbl_articulos $articulo)
    {
        $articulo->delete();

        return back()->with('destroy', 'El Articulo a sido eliminado correctamente');
    }
}
