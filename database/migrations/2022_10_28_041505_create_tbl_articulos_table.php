<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_articulos', function (Blueprint $table) {
            $table->increments('cod_articulo', 10);
            $table->String('tipo_articulo', 10);
            $table->String('nom_articulo', 20);
            $table->String('material_articulo', 20);
            $table->String('talla_articulo', 5);
            $table->String('linea', 20);
            $table->String('unidad_medida', 10);
            $table->String('color_articulo', 10);
            $table->String('descripcion_articulo', 150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_articulos');
    }
};