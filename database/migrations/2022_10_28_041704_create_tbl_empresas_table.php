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
        Schema::create('tbl_empresas', function (Blueprint $table) {
            $table->integer('nit_empresa',10);
            $table->String('nom_empresa', 10);
            $table->String('tel_empresa', 20);
            $table->String('direccion_empresa', 30);
            $table->String('email_empresa', 30);
            $table->integer('id_user');
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
        Schema::dropIfExists('tbl_empresas');
    }
};
