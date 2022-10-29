<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tbl_empresas;
use Illuminate\Http\Request;

class empresas extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:20',
            'telefono' => 'required|max:10|integer',
            'direccion' => 'required|max:20',
            'email' => 'required|max:10|email',
        ]);
        $empresas = new tbl_empresas();
        $empresas->nom_empresa = $request->tipo;
        $empresas->tel_empresa = $request->nombre;
        $empresas->direccion_empresa = $request->material;
        $empresas->email_empresa = $request->email;
        $empresas->id_user = $request->user;
        $empresas->save();
        return redirect()->route('reg_articulo');
    }
}
