<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tbl_usuarios;
use Illuminate\Http\Request;

class usuarios extends Controller
{
    public function store(Request $request)
    {   
       /* El validate funciona, pero los datos que se estan enviando no cumplen
        $a= $request->validate([
            'id' => 'required|max:10',
            'email' => 'required|max:15|email',
            'contraseña' => 'required|max:20',
            'nombres' => 'required|max:20',
            'apellidos' => 'required|max:20',
            'fecha' => 'required|max:10|date',
            'telefono' => 'required|max:10|integer',
            'direccion' => 'required|max:20',
            'rol' => 'required|max:20',
        ]);
         */
        $usuarios = new tbl_usuarios();
        $usuarios->id_user = $request->id;
        $usuarios->email_user = $request->email;
        $usuarios->contraseña_user = $request->contraseña;
        $usuarios->nom_user = $request->nombres;
        $usuarios->apellidos_user = $request->apellidos;
        $usuarios->fecha_ingreso = $request->fecha;
        $usuarios->telefono_user = $request->telefono;
        $usuarios->direccion_user = $request->direccion;
        $usuarios->cod_rol = $request->rol;
        $usuarios->save();
        return redirect()->route('prueba.store') -> with('success', 'Tarea creada correctamente');
    }

    public function index() {

        $usuarios = tbl_usuarios::all();
        return view('usuarios.usuarios', compact('usuarios'));
    }
}
