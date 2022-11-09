@extends('plantilla')

<!--estilo css -->
@section('estilos')
{{asset('css/forms.css')}}
@stop

<!--link nav -->
@section('link')
{{ route('ver_salida')}}
@stop

<!-- palabra nav -->
@section('palabra-accion')
{{'Ver'}}
@stop


<!-- Titulo -->
@section('titulo')
{{ 'Registrar salida'}}
@stop

@section('seccion')
<form class="registrar_usuario" action="{{route('post_reg_salida')}}" method="POST" enctype="multipart/form-data">
@csrf
    <h2 class="form_titulo">Registrar salida</h2>
    <div class="form_container">
        <div class="from_group">
            <select name="cod_articulo" class="from_group">
                <option selected><button href="{{route('reg_articulo')}}" ><a >Seleccione un Articulo</a></button></option>
                @foreach ($articulos_view as $articulo)
                <option value="{{$articulo->cod_articulo}}">{{$articulo->cod_articulo }} - {{$articulo->nom_articulo}} - {{$articulo->color_articulo}} - {{$articulo->tipo_articulo}}</option>
                @endforeach
            </select>
        </div> 
        <div class="from_group">
            <select name="causal" id="causal">
                <option selected>Causal salida</option>
                <option value="Factura de venta - producto">Factura de venta - producto</option>
                <option value="No conforme - producto">No conforme - producto</option>
                <option value="Confección (Satelite) - materia prima">Confección (Satelite) - materia prima</option>
                <option value="Baja - materia prima">Baja - materia prima</option>
                <option value="Baja - insumo">Baja - insumo</option>
            </select>                  
        </div>
        <div class="from_group">
            <select name="num_factura" class="from_group">
                <option selected><button href="{{route('reg_factura')}}" ><a >Seleccione una factura</a></button></option>
                <option value="">No aplica</option>
                @foreach ($facturas_view as $factura)
                <option value="{{$factura->num_factura}}">{{$factura->num_factura}} - {{$factura->tipo_factura}} </option>
                @endforeach
            </select>
        </div>
        <div class="from_group">
            <input type="number"  class="from_input" placeholder="Cantidad" name="cantidad" 
            required maxlength="10" minlength="10">
        </div>
        <div class="from_group">
            <select name="tipo" id="tipo">
                <option select="">Seleccione tipo registro</option>
                <option value="salida">Salida</option>
            </select>                  
        </div>
        <input type="submit" value="Registrar" class="form_submit" class="gap" name="Registrar">
        <input type="reset" value="Limpiar" class="form_submit" class="gap" name="Limpiar">

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
    error('Dato Errado', 'dejo algún campo sin seleccionar')
</script>
@endforeach

@endif 


@stop

