<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tbl_roles;
use Illuminate\Http\Request;

class roles extends Controller
{
    public function store(Request $request)
    {   
       /* El validate funciona, pero los datos que se estan enviando no cumplen    */
        $request->validate([
            'codigo' => 'max:10',
            'nombre' => 'max:30',
        ]);
     
        $roles = new tbl_roles();
        $roles->cod_rol = $request->codigo;
        $roles->nom_rol = $request->nombre;
        $roles->save();
        return redirect()->route('post_crear_rol') -> with('guardado', 'Tarea creada correctamente');
    }

    public function index() {

        $roles = tbl_roles::all();
        return view('usuarios.roles', compact('roles'));
    }

    public function edit(tbl_roles $rol)
    {

        return view('usuarios.roles', compact('rol'));
    }

    public function update(Request $request, tbl_roles $rol)
    {
        $request->validate([
            'codigo' => 'required|max:10',
            'nombre' => 'required|max:30',

        ]);
     
        $rol = new tbl_roles();
        $rol->cod_rol = $request->codigo;
        $rol->nom_rol = $request->nombre;
        $rol->save();
        session()->flash('actualizado', 'El usuario a sido editado con exito');
        return view('usuarios.roles', compact('rol'));
    }

    public function destroy(tbl_roles $rol)
    {
        $rol->delete();

        return back()->with('destroy', 'El rol a sido eliminado correctamente');
    }

}
