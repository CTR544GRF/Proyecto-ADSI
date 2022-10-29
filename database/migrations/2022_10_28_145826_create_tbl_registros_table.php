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
        Schema::create('tbl_registros', function (Blueprint $table) {
            $table->increments('cod_registro', 10);
            $table->String('tipo', 20);
            $table->Integer('cantidad');
            $table->String('causal', 20);
            $table->unsignedInteger('num_factura')->nullable();
            $table->foreign('num_factura')->references('num_factura')->on('tbl_facturas');
            $table->unsignedInteger('cod_articulo');
            $table->foreign('cod_articulo')->references('cod_articulo')->on('tbl_articulos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_registros');
    }
};
