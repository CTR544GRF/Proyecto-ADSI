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
        Schema::create('tbl_inventarios', function (Blueprint $table) {
            $table->Integer('Entradas');
            $table->Integer('Salidas');
            $table->float('Existencias');
            $table->unsignedInteger('cod_registro');
            $table->foreign('cod_registro')->references('cod_registro')->on('tbl_registros');
            $table->unsignedInteger('cod_articulo');
            $table->foreign('cod_articulo')->references('cod_articulo')->on('tbl_articulos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_inventarios');
    }
};
