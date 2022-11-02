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
<form class="registrar_usuario" action="route('update_empresa')" method="POST">
@csrf 
@method('PATCH')    
    <div class="form_container">
        <h2 class="form_titulo">Editar empresa</h2>
        <div class="from_group">
            <input type="text" name="nombre" class="from_input" value="{{$empresa->nom_empresa}}">
        </div>
        <div class="from_group">
            <input type="text" name="telefono" class="from_input" value="{{$empresa->tel_empresa}}">
        </div>
        <div class="from_group">
            <input type="text" name="direccion" class="from_input" value="{{$empresa->direccion_empresa}}">
        </div>
        <div class="from_group">
            <input type="email" name="e_mail" class="from_input" value="{{$empresa->email_empresa}}">
        </div>
        <div class="from_group">
            <select name="id_user" class="from_group">
                <option value="{{$empresa->id_usuer}}">{{$empresa->id_user}}</option>
                @foreach ($usuarios_view as $user)
                <option value="{{$user->id_user}}">{{$user->id_user }} - {{$user->nom_user}} - {{$user->apellidos_user}}</option>
                @endforeach
            </select>
        </div>
        <button name="registrar" type="submit" class="form_submit"><strong>Editar empresa</strong></button>
    </div>
</form>

@if (session('actualizado'))
<script>
    guardado('Actualizacion Exitosa', '<?php echo session('actualizado') ?>');
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
