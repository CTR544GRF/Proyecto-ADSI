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
<!-- Titulo -->
@section('titulo')
{{ 'Registrar Articulo'}}
@stop

@section('seccion')

<form class="registrar_usuario" action="script/insertar_articulos.php">

    <div class="form_container">
        <h2 class="form_titulo">Registrar articulo</h2>
        <div class="from_group">
            <input type="text" id="Codigo articulo" class="from_input" placeholder="Codigo articulo" name="codigo">
        </div>
        <div class="from_group">
            <input type="text" id="Tipo articulo" class="from_input" placeholder="Tipo articulo" name="tipo">
        </div>
        <div class="from_group">
            <input type="text" id="Nombre" class="from_input" placeholder="Nombre" name="nombre">
        </div>
        <div class="from_group">
            <input type="text" id="Material" class="from_input" placeholder="Material" name="material">
        </div>
        <div class="from_group">
            <input type="text" id="Talla" class="from_input" placeholder="Talla" name="talla">
        </div>
        <div class="from_group">
            <input type="text" id="Linea" class="from_input" placeholder="Linea" name="linea">
        </div>
        <div class="from_group">
            <input type="text" id="Unidad de medida" class="from_input" placeholder="Unidad de medida" name="uMedida">
        </div>
        <div class="from_group">
            <input type="text" id="Color" class="from_input" placeholder="Color" name="color">
        </div>
        <div class="from_group">
            <input type="text" id="descripción" class="from_input" placeholder="descripción" name="descripcion">
        </div>
        <button type="submit" class="form_submit" name="registrarArt">Registrar Articulo</button>
    </div>
</form>

@stop
