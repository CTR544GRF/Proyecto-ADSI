<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tbl_empresas;
use App\Models\tbl_usuarios;
use Illuminate\Http\Request;

class empresas extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:20',
            'telefono' => 'required|digits_between:5,10|integer',
            'direccion' => 'required|max:30',
            'e_mail' => 'required|max:30|email',
        ]);
        $empresas = new tbl_empresas();
        $empresas->nom_empresa = $request->nombre;
        $empresas->tel_empresa = $request->telefono;
        $empresas->direccion_empresa = $request->direccion;
        $empresas->email_empresa = $request->e_mail;
        $empresas->id_user = $request->id_user;
        $empresas->save();
        return redirect()->route('reg_empresa')->with('guardado', 'La Empresa a sido guardada con exito');;
    }
    // Retorno de tablas y selact
    public function index()
    {
        $empresas_view = tbl_empresas::all();
        return view('Empresas.empresas', compact('empresas_view'));
    }
    
    public function index2(){
        $usuarios_view = tbl_usuarios::all();
        return view('Empresas.registrar_empresa', compact('usuarios_view'));
    }

    public function edit(tbl_empresas $empresa)
    {
        $usuarios_view = tbl_usuarios::all();
        return view('Empresas.editar_empresa', compact('empresa','usuarios_view'));
    }
    
    public function update(Request $request, tbl_empresas $empresas)
    {
        $request->validate([
            'nombre' => 'required|max:20',
            'telefono' => 'required|digits_between:5,10|integer',
            'direccion' => 'required|max:30',
            'e_mail' => 'required|max:30|email',
        ]);
        $empresas->nom_empresa = $request->nombre;
        $empresas->tel_empresa = $request->telefono;
        $empresas->direccion_empresa = $request->direccion;
        $empresas->email_empresa = $request->e_mail;
        $empresas->id_user = $request->id_user;
        $empresas->save();
        return redirect()->route('reg_empresa')->with('guardado', 'La Empresa a sido guardada con exito');
        return view('Articulos.editar_articulo', compact('articulo'));
    }
}

