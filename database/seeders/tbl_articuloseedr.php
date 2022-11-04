<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tbl_articuloseedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_articulos')->insert([
            'tipo_articulo'=>'Productos',
            'nom_articulo'=>'Pantalon',
            'material_articulo'=>'Jean',
            'talla_articulo'=>'S',
            'linea'=>'Adultos',
            'unidad_medida'=>'metros',
            'color_articulo'=>'azul'
        ]);

        DB::table('tbl_articulos')->insert([
            'tipo_articulo'=>'Productos',
            'nom_articulo'=>'Pantalon',
            'material_articulo'=>'Jean',
            'talla_articulo'=>'S',
            'linea'=>'Adultos',
            'unidad_medida'=>'metros',
            'color_articulo'=>'azul'
        ]);

        DB::table('tbl_articulos')->insert([
            'tipo_articulo'=>'Productos',
            'nom_articulo'=>'Pantalon',
            'material_articulo'=>'Jean',
            'talla_articulo'=>'S',
            'linea'=>'Adultos',
            'unidad_medida'=>'metros',
            'color_articulo'=>'azul'
        ]);

        DB::table('tbl_articulos')->insert([
            'tipo_articulo'=>'Productos',
            'nom_articulo'=>'Pantalon',
            'material_articulo'=>'Jean',
            'talla_articulo'=>'S',
            'linea'=>'Adultos',
            'unidad_medida'=>'metros',
            'color_articulo'=>'azul'
        ]);

        DB::table('tbl_articulos')->insert([
            'tipo_articulo'=>'Productos',
            'nom_articulo'=>'Pantalon',
            'material_articulo'=>'Jean',
            'talla_articulo'=>'S',
            'linea'=>'Adultos',
            'unidad_medida'=>'metros',
            'color_articulo'=>'azul'
        ]);
    }
}
