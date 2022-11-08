<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tbl_usuarios;
use App\Models\tbl_roles;
use Illuminate\Http\Request;

class usuarios extends Controller
{
    public function store(Request $request)
    {
        /* El validate funciona, pero los datos que se estan enviando no cumplen    */
        $request->validate([
<<<<<<< HEAD
            'email' => 'required|max:30|email',
=======
            'id' => 'required|max:10',
            'email' => 'required|max:30|email|unique',
>>>>>>> d7be77f09dab137bfde9679d6ebb8dfbc94f56cf
            'contraseña' => 'required|max:20|min:5',
            'nombres' => 'required|max:50',
            'apellidos' => 'required|max:50',
            'fecha' => 'required|max:50|date',
            'telefono' => 'required|max:10',
            'direccion' => 'required|max:20',
            'rol' => 'required|max:20',
        ]);

        $usuarios = new tbl_usuarios();
        $usuarios->id_user = $request->id;
        $usuarios->email_user = $request->email;
        $usuarios->contraseña_user = bcrypt($request->contraseña);
        $usuarios->nom_user = $request->nombres;
        $usuarios->apellidos_user = $request->apellidos;
        $usuarios->fecha_ingreso = $request->fecha;
        $usuarios->telefono_user = $request->telefono;
        $usuarios->direccion_user = $request->direccion;
        $usuarios->cod_rol = $request->rol;
        $usuarios->save();
        return redirect()->route('post_reg_usuario')->with('guardado', 'Tarea creada correctamente');
    }

    public function index()
    {

        $usuarios = tbl_usuarios::all();
        return view('usuarios.usuarios', compact('usuarios'));
    }
    public function index2()
    {

        $roles = tbl_roles::all();
        return view('usuarios.registrar_usuario', compact('roles'));
    }

<<<<<<< HEAD
    public function index3()
    {

        $roles = tbl_roles::all();
        return view('usuarios.editar_usuario', compact('roles'));
    }
=======
 
>>>>>>> d7be77f09dab137bfde9679d6ebb8dfbc94f56cf

    public function edit(tbl_usuarios $usuario)
    {

        return view('usuarios.editar_usuario', compact('usuario'));
    }

    public function index3() {
        $roles = tbl_roles::all();
       return view('usuarios.editar_usuario', compact('roles'));
   }


    public function update(Request $request, tbl_usuarios $usuario)
    {
        $request->validate([
            'id' => 'required|max:10',
            'email' => 'required|max:30|email',
            'contraseña' => 'required|max:20',
            'nombres' => 'required|max:50',
            'apellidos' => 'required|max:50',
            'fecha' => 'required|max:50|date',
            'telefono' => 'required|max:10|integer',
            'direccion' => 'required|max:20',
            'rol' => 'required|max:20',
        ]);

        $usuario = new tbl_usuarios();
        $usuario->id_user = $request->id;
        $usuario->email_user = $request->email;
        $usuario->contraseña_user = $request->contraseña;
        $usuario->nom_user = $request->nombres;
        $usuario->apellidos_user = $request->apellidos;
        $usuario->fecha_ingreso = $request->fecha;
        $usuario->telefono_user = $request->telefono;
        $usuario->direccion_user = $request->direccion;
        $usuario->cod_rol = $request->rol;
        $usuario->save();
        session()->flash('actualizado', 'El usuario a sido editado con exito');
        return view('usuarios.editar_usuario', compact('usuarios'));
    }

    public function destroy(tbl_usuarios $usuario)
    {
        $usuario->delete();

        return back()->with('destroy', 'El usuario a sido eliminado correctamente');
    }
}
