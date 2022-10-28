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

<!-- Titulo -->
@section('titulo')
{{ 'Registrar Empresa'}}
@stop

@section('seccion')
<form class="registrar_usuario" action="" method="POST" enctype="multipart/form-data">
@csrf     
<div class="form_container">
        <h2 class="form_titulo">Registrar empresa</h2>
        <!-- <div class="from_group">
            <input type="text" name="nit" class="from_input" placeholder="Nit" required>
        </div>  -->
        <div class="from_group">
            <input type="text" name="nombre" class="from_input" placeholder="Nombre" required>
        </div>
        <div class="from_group">
            <input type="text" name="telefono" class="from_input" placeholder="Teléfono" required>
        </div>
        <div class="from_group">
            <input type="text" name="direccion" class="from_input" placeholder="Direccion" required>
        </div>
        <div class="from_group">
            <input type="email" name="e_mail" class="from_input" placeholder="E-mail" required>
        </div>
        <div class="from_group">
            <select name="cod_ciudad" id="">
                <option value="1">Seleccion una ciudad</option>
            </select>
        </div>
        <div class="from_group">
        <select name="id_user" id="">
                <option value="1">Seleccion un usuario</option>
            </select>
        </div>
        <button name="registrar" type="submit" class="form_submit"><strong>Registrar empresa</strong></button>
    </div>
</form>
@stop
