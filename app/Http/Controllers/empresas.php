<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class empresas extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|max:20',
            'telefono'=>'required|max:10|integer',
            'direccion'=>'required|max:20',
            'email'=>'required|max:10|email',
            ]);
    }
}
