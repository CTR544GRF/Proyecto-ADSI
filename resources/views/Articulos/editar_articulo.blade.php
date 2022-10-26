@extends('plantilla')

<!--estilo css -->
@section('estilos')
    {{asset('css/forms.css')}}
@stop

<!--link nav -->
@section('link')
    {{ route('ver_articulo')}}
@stop
 <!-- palabra nav -->
@section('palabra-accion')
    {{'Ver'}}
@stop
<!--link nav2 -->
@section('link2')
    {{ route('reg_articulo')}}
@stop
 <!-- palabra nav2 -->
@section('palabra-accion2')
    {{'Registrar'}}
@stop
<!-- Script js -->
@section('script')
    {{ asset('js/registro_factura.js')}}
@stop
<!-- Titulo -->
@section('titulo')
    {{ 'Registrar Factura'}}
@stop

@section('seccion')


@stop
    <form class="registrar_usuario" action="script/update_articulos.php" method="POST">
        <div class="form_container">
        <h2 class="form_titulo">Editar articulo</h2>
            <div class="from_group">
                <input type="hidden" id="Codigo" class="from_input" placeholder="Codigo del articulo" name="codigo" value="<?php //echo $mostrar['cod_articulo']?>">
            </div>
            <div class="from_group">
                <input type="text" id="Tipo articulo" class="from_input" placeholder="Tipo articulo" name="tipo" value="<?php //echo $mostrar['tipo_articulo']?>">                    
            </div>
            <div class="from_group">
                <input type="text" id="Nombre" class="from_input" placeholder="Nombre" name="nombre" value="<?php //echo $mostrar['nom_articulo']?>">
            </div>
            <div class="from_group">
                <input type="text" id="Material" class="from_input" placeholder="Material" name="material" value="<?php //echo $mostrar['material_articulo']?>">
            </div>
            <div class="from_group">
                <input type="text" id="Talla" class="from_input" placeholder="Talla" name="talla" value="<?php //echo $mostrar['talla_articulos']?>">
            </div>
            <div class="from_group">
                <input type="text" id="Linea" class="from_input" placeholder="Linea" name="linea" value="<?php //echo $mostrar['linea']?>">
            </div>
            <div class="from_group">
                <input type="text" id="Unidad de medida" class="from_input" placeholder="Unidad de medida" name="uMedida" value="<?php //echo $mostrar['unida_medida']?>">
            </div>
            <div class="from_group">
                <input type="text" id="Color" class="from_input" placeholder="Color" name="color" value="<?php //echo $mostrar['color_articulo']?>">
            </div>
            <div class="from_group">
                <input type="text" id="descripción" class="from_input" placeholder="descripción" name="descripcion" value="<?php //echo $mostrar['descripcion_articulo']?>">
            </div>
            <button type="submit" class="form_submit" name="registrarArt">Editar</button>
        </div>
    </form>