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
        Schema::create('tbl_usuarios', function (Blueprint $table) {
            $table->integer('id_user',10);
            $table->String('email_user', 50)->unique();
            $table->String('contraseña_user', 20);
            $table->String('nom_user', 20);
            $table->String('apellidos_user', 20);
            $table->date('fecha_ingreso', 20);
            $table->String('telefono_user', 10);
            $table->String('direccion_user', 30);
            $table->integer('cod_rol');
            $table->foreign('cod_rol')->references('cod_rol')->on('tbl_roles');
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
        Schema::dropIfExists('tbl_usuarios');
    }
};
