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
        Schema::create('tbl_facturas', function (Blueprint $table) {
            $table->increments('num_factura', 10);
            $table->date('fecha');
            $table->String('tipo_factura', 20);
            $table->float('valor_unitario');
            $table->Integer('cantidad');
            $table->float('sub_total');
            $table->float('iva');
            $table->float('total');
            $table->String('descripcion', 150);
            $table->unsignedInteger('cod_articulo');
            $table->foreign('cod_articulo')->references('cod_articulo')->on('tbl_articulos');
            $table->unsignedInteger('nit_empresa')->nullable();
            $table->foreign('nit_empresa')->references('nit_empresa')->on('tbl_empresas');
            $table->unsignedInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id_user')->on('tbl_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_facturas');
    }
};
