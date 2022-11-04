<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tbl_roleseedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_roles')->insert([
            'nom_rol'=>'Administrador'
        ]);
        
        DB::table('tbl_roles')->insert([
            'nom_rol'=>'Almacenista'
        ]);
        
        DB::table('tbl_roles')->insert([
            'nom_rol'=>'Contador'
        ]);
        
        DB::table('tbl_roles')->insert([
            'nom_rol'=>'Cliente'
        ]);
        DB::table('tbl_roles')->insert([
            'nom_rol'=>'Representante'
        ]);
    }
}
