<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'nom_articulo'=>'Camisa',
            'material_articulo'=>'Algodon',
            'talla_articulo'=>'S',
            'linea'=>'Adultos',
            'unidad_medida'=>'metros',
            'color_articulo'=>'Verde'
        ]);

        DB::table('tbl_articulos')->insert([
            'tipo_articulo'=>'Productos',
            'nom_articulo'=>'Chaqueta',
            'material_articulo'=>'impermeable',
            'talla_articulo'=>'S',
            'linea'=>'Adultos',
            'unidad_medida'=>'metros',
            'color_articulo'=>'rojo'
        ]);

        DB::table('tbl_articulos')->insert([
            'tipo_articulo'=>'Productos',
            'nom_articulo'=>'Medias',
            'material_articulo'=>'algodon',
            'talla_articulo'=>'S',
            'linea'=>'Adultos',
            'unidad_medida'=>'metros',
            'color_articulo'=>'aguamarina'
        ]);

        DB::table('tbl_articulos')->insert([
            'tipo_articulo'=>'Materia Prima',
            'nom_articulo'=>'Tela',
            'material_articulo'=>'lafayet',
            'linea'=>'Adultos',
            'unidad_medida'=>'metros',
            'color_articulo'=>'verde'
        ]);
    }
}
