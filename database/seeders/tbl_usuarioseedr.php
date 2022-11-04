<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tbl_usuarioseedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_usuarios')->insert([
            'email_user'=>'camilo1003diaz@gmail.com',
            'contraseña_user'=>'camilo',
            'nom_user'=>'Juan Camilo',
            'apellidos_user'=>'Diaz Florez',
            'fecha_ingreso'=>'2022-11-02',
            'telefono_user'=>'1234567891',
            'direccion_user'=>'calle 23',
            'cod_rol'=>'1'
        ]);

        DB::table('tbl_usuarios')->insert([
            'email_user'=>'jecatro648@misena.edu.co',
            'contraseña_user'=>'estebanquito',
            'nom_user'=>'Jeison Esteban',
            'apellidos_user'=>'Castro Carvajal',
            'fecha_ingreso'=>'2022-11-02',
            'telefono_user'=>'1234567891',
            'direccion_user'=>'calle 24',
            'cod_rol'=>'2'
        ]);

        DB::table('tbl_usuarios')->insert([
            'email_user'=>'yury.gutierrez1@misena.edu.co',
            'contraseña_user'=>'yuri',
            'nom_user'=>'Yury Natalia',
            'apellidos_user'=>'Gutierrez Hernandez',
            'fecha_ingreso'=>'2022-11-03',
            'telefono_user'=>'1234567891',
            'direccion_user'=>'calle 25',
            'cod_rol'=>'3'
        ]);

        DB::table('tbl_usuarios')->insert([
            'email_user'=>'suescunandres23@gmail.com',
            'contraseña_user'=>'andres',
            'nom_user'=>'Jualian Andres',
            'apellidos_user'=>'Suescun',
            'fecha_ingreso'=>'2022-11-04',
            'telefono_user'=>'1234567891',
            'direccion_user'=>'calle 26',
            'cod_rol'=>'4'
        ]);

        DB::table('tbl_usuarios')->insert([
            'email_user'=>'waramos176@misena.edu.co',
            'contraseña_user'=>'william',
            'nom_user'=>'William Andres',
            'apellidos_user'=>'Ramos Quiñones',
            'fecha_ingreso'=>'2022-11-05',
            'telefono_user'=>'1234567891',
            'direccion_user'=>'calle 27',
            'cod_rol'=>'5'
        ]);
    }
}
