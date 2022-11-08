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
            $table->integer('num_factura', 10);
            $table->date('fecha');
            $table->String('tipo_factura', 20);
            $table->double('valor_unitario');
            $table->double('cantidad');
            $table->integer('sub_total');
            $table->double('iva');
            $table->double('total');
            $table->String('descripcion', 150);
            $table->integer('cod_articulo');
            $table->foreign('cod_articulo')->references('cod_articulo')->on('tbl_articulos');
            $table->integer('nit_empresa')->nullable();
            $table->foreign('nit_empresa')->references('nit_empresa')->on('tbl_empresas');
            $table->integer('id_user')->nullable();
            $table->foreign('id_user')->references('id_user')->on('tbl_usuarios');
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
        Schema::dropIfExists('tbl_facturas');
    }
};
