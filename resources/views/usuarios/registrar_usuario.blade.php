@extends('plantilla')

<!--estilo css -->
@section('estilos')
{{asset('css/forms.css')}}
@stop

<!--link nav -->
@section('link')
{{ route('edit_usuario')}}
@stop

<!-- palabra nav -->
@section('palabra-accion')
{{'Editar'}}
@stop

<!--link nav2 -->
@section('link2')
{{ route('ver_usuario')}}
@stop

<!-- palabra nav2 -->
@section('palabra-accion2')
{{'Ver'}}
@stop

<!-- Script js -->

<!-- Titulo -->
@section('titulo')
{{ 'Registrar Usuario'}}
@stop



@section('seccion')
<form class="registrar_usuario">
    <h2 class="form_titulo">Registrar Usuarios</h2>
    <div class="form_container">
        <div class="from_group">
            <input type="text" id="ID" class="from_input" placeholder="Id" name="id" required maxlength="10">
        </div>
        <div class="from_group">
            <input type="text" id="nombre" class="from_input" placeholder="Nombre" name="nombre" required pattern="^[A-Za-z ]+" maxlength="25">
        </div>
        <div class="from_group">
            <input type="text" id="apellido" class="from_input" placeholder="Apellido" name="apellido" required maxlength="25" pattern="^[A-Za-z ]+">
        </div>
        <div class="from_group">
            <input type="text" id="telefono" class="from_input" placeholder="Teléfono" name="telefono" required maxlength="10" minlength="10" pattern="^[0-9]+">
        </div>
        <div class="from_group">
            <input type="text" id="direccion" class="from_input" placeholder="Direccion" name="direccion" required maxlength="30">
        </div>
        <div class="from_group">
            <input type="password" id="Contraseña" class="from_input" placeholder="Contraseña" name="contraseña" required minlength="6">
        </div>
        <div class="from_group">
            <input type="email" id="e_mail" class="from_input" placeholder="E-mail" name="email" required>
        </div>
        <div class="from_group">
            <input type="date" id="fecha_ingreso" class="from_input" placeholder="Fecha de ingreso" name="fech_ingreso" required>
        </div>
        <div class="from_group">
            <select name="rol" id="rol" required>
                <option selected>Rol</option>
                <option value="2">Contador</option>
                <option value="3">Cliente</option>
                <option value="4">Proveedor</option>
                <option value="5">Almacenista</option>
            </select>
        </div>
        <a href="main"><input value="Registrar" class="form_submit" name='submit'></a>
    </div>
</form>
@stop
