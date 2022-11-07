@extends('plantilla')

<!--estilo css -->
@section('estilos')
{{asset('css/forms.css')}}
@stop

<!--link nav -->
@section('link')
{{ route('ver_entrada')}}
@stop

<!-- palabra nav -->
@section('palabra-accion')
{{'Ver'}}
@stop


<!-- Titulo -->
@section('titulo')
{{ 'Salidas'}}
@stop

@section('seccion')
<form class="registrar_usuario" action="{{route('post_reg_entrada')}}" method="POST" enctype="multipart/form-data">
@csrf
    <h2 class="form_titulo">Registrar salida</h2>
    <div class="form_container">
        <div class="from_group">
            <select name="cod_articulo" class="from_group">
                <option value=""><button href="{{route('reg_articulo')}}" ><a >Crear un Articulo</a></button></option>
                @foreach ($articulos_view as $articulo)
                <option value="{{$articulo->cod_articulo}}">{{$articulo->cod_articulo }} - {{$articulo->nom_articulo}} - {{$articulo->color_articulo}}</option>
                @endforeach
            </select>
        </div> 
        <div class="from_group">
            <select name="causal" id="causal">
                <option select="Causal salida">Causal salida</option>
                <option value="Factura de venta - producto">Factura de venta - producto</option>
                <option value="No conforme - producto">No conforme - producto</option>
                <option value="Confección (Satelite) - materia prima">Confección (Satelite) - materia prima</option>
                <option value="Baja - materia prima">Baja - materia prima</option>
                <option value="Baja - insumo">Baja - insumo</option>
            </select>                  
        </div>
        <div class="from_group">
            <input type="number"  class="from_input" placeholder="Número de factura" name="num_factura" >
        </div>
        <div class="from_group">
            <input type="number"  class="from_input" placeholder="Cantidad" name="cantidad" 
            required maxlength="10" minlength="10">
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
    error('Dato Errado', '')
</script>
@endforeach

@endif 


@stop

