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
<!-- Titulo -->
@section('titulo')
{{ 'Editar Articulo'}}
@stop

@section('seccion')
<form class="registrar_usuario" action="{{route('update_articulo', $articulo)}}" method="POST">
    @csrf @method('PATCH')
    <div class="form_container">
        <h2 class="form_titulo">Editar articulo</h2>
        <div class="from_group">
            <input type="text" id="Tipo articulo" class="from_input" name="tipo" value="{{$articulo->tipo_articulo}}">
        </div>
        <div class="from_group">
            <input type="text" id="Nombre" class="from_input" value="{{$articulo->nom_articulo}}" name="nombre">
        </div>
        <div class="from_group">
            <input type="text" id="Material" class="from_input" value="{{$articulo->material_articulo}}" name="material">
        </div>
        <div class="from_group">
            <input type="text" id="Talla" class="from_input" value="{{$articulo->talla_articulo}}" name="talla">
        </div>
        <div class="from_group">
            <input type="text" id="Linea" class="from_input" value="{{$articulo->linea}}" name="linea">
        </div>
        <div class="from_group">
            <input type="text" id="Unidad de medida" class="from_input" value="{{$articulo->unidad_medida}}" name="uMedida">
        </div>
        <div class="from_group">
            <input type="text" id="Color" class="from_input" value="{{$articulo->color_articulo}}" name="color">
        </div>
        <div class="from_group">
            <input type="text" id="descripción" class="from_input" value="{{$articulo->descripcion_articulo}}" name="descripcion">
        </div>
        <button type="submit" class="form_submit" name="registrarArt">Editar</button>
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
