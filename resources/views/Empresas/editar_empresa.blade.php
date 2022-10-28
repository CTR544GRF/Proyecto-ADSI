@extends('plantilla')

<!--estilo css -->
@section('estilos')
{{asset('css/forms.css')}}
@stop

<!--link nav -->
@section('link')
{{ route('ver_empresa')}}
@stop
<!-- palabra nav -->
@section('palabra-accion')
{{'Ver'}}
@stop
<!--link nav2 -->
@section('link2')
{{ route('reg_empresa')}}
@stop
<!-- palabra nav2 -->
@section('palabra-accion2')
{{'Registrar'}}
@stop
<!-- Titulo -->
@section('titulo')
{{ 'Editar Empresa'}}
@stop

@section('seccion')
<form class="registrar_usuario" action="script/update_empresas.php" method="POST">
    <div class="form_container">
        <h2 class="form_titulo">Editar empresa</h2>
        <div class="from_group">
            <input type="hidden" name="nit" class="from_input" placeholder="Nit">
        </div>
        <div class="from_group">
            <input type="text" name="nombre" class="from_input" placeholder="Nombre">
        </div>
        <div class="from_group">
            <input type="text" name="telefono" class="from_input" placeholder="Teléfono">
        </div>
        <div class="from_group">
            <input type="text" name="direccion" class="from_input" placeholder="Direccion">
        </div>
        <div class="from_group">
            <input type="email" name="e_mail" class="from_input" placeholder="E-mail">
        </div>
        <div class="from_group">
            <input type="text" name="id_usuario" class="from_input" placeholder="Id - Usuario">
        </div>
        <div class="from_group">
            <input type="number" name="cod_ciudad" class="from_input" placeholder="Cod cod_ciudad">
        </div>
        <button name="registrar" type="submit" class="form_submit"><strong>Editar empresa</strong></button>
    </div>
</form>
@stop
