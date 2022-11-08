@extends('plantilla')

<!--estilo css -->
@section('estilos')
{{asset('css/forms.css')}}
@stop

<!-- link nav -->
@section('link')
{{''}}
@stop

<!-- palabra nav -->
@section('palabra-accion')
{{''}}
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
<form class="registrar_usuario" action="{{route('post_reg_usuario')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h2 class="form_titulo">Registrar Usuarios</h2>
    <div class="form_container">
        <div class="from_group">
            <input type="text" id="ID" class="from_input" placeholder="Id" name="id" 
            required maxlength="10">
        </div>
        <div class="from_group">
            <input type="text" id="nombres" class="from_input" placeholder="Nombres" name="nombres" required pattern="^[A-Za-z ]+" maxlength="25">
        </div>
        <div class="from_group">
            <input type="text" id="apellidos" class="from_input" placeholder="Apellidos" name="apellidos" required maxlength="25" pattern="^[A-Za-z ]+">
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
            <input type="email" id="email" class="from_input" placeholder="E-mail" name="email" required>
        </div>
        <div class="from_group">
            <input type="date" id="fecha" class="from_input" placeholder="Fecha de ingreso" name="fecha" required>
        </div>
        <div class="from_group">
            <select name="rol" id="rol" required>
                <option value="">Seleccione rol</option>
                @foreach ($roles as $rol)
                <option value="{{$rol->cod_rol}}">{{$rol->cod_rol }} - {{$rol->nom_rol}}</option>
                @endforeach
            </select>
        </div>
        <button class="form_submit" type='submit'> Registrar </button>
        <button class="form_submit"><a href="{{ route('crear_rol')}}"> Crear rol </a></button>
    </div>
</form>
@if (session('guardado'))
<script>
    guardado('Registro Exitoso', '<?php echo session('guardado') ?>');
</script>
@endif

@if ($errors->any())
@foreach ($errors->all() as $message)
<script>
    error('Dato Errado', '<?php echo $message ?>')
</script>
@endforeach

@endif


@stop
