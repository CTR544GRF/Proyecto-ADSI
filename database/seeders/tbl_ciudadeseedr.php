<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tbl_ciudadeseedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_ciudades')->insert([
            'nom_ciudad'=>'Bogota'
        ]);
        DB::table('tbl_ciudades')->insert([
            'nom_ciudad'=>'Cali'
        ]);
        DB::table('tbl_ciudades')->insert([
            'nom_ciudad'=>'Barranquilla'
        ]);
        DB::table('tbl_ciudades')->insert([
            'nom_ciudad'=>'Cucuta'
        ]);
        DB::table('tbl_ciudades')->insert([
            'nom_ciudad'=>'Cartagena'
        ]);
    }
}
