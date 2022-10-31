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
<form class="registrar_usuario" action="{{route('post_reg_empresa')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form_container">
        <h2 class="form_titulo">Registrar empresa</h2>
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
            <select name="id_user" class="from_group">
                <option value=""><button href="{{route('reg_usuario')}}" ><a >Crear un Usuario</a></button></option>
                @foreach ($usuarios_view as $user)
                <option value="{{$user->id_user}}">{{$user->id_user }} - {{$user->nom_user}} - {{$user->apellidos_user}}</option>
                @endforeach
            </select>
        </div>
        <button name="registrar" type="submit" class="form_submit"><strong>Registrar empresa</strong></button>
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
