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
{{ 'Registrar Entrada'}}
@stop

@section('seccion')
    <form class="registrar_usuario"  >
        <h2 class="form_titulo">Registrar salida</h2>
        <div class="form_container">
            <div class="from_group">
                <input type="text"  class="from_input" placeholder="Codigo de artículo" name="cod_articulo" value="<?php if(isset($cod_articulo)) echo $cod_articulo;?>"
                required maxlength="10" minlength="10">                    
            </div>
            <div class="from_group">
                <select name="causal_salida" id="causal">
                    <option value="Causal salida">Causal salida</option>
                    <option value="Factura de venta - producto">Factura de venta - producto</option>
                    <option value="No conforme - producto">No conforme - producto</option>
                    <option value="Confección (Satelite) - materia prima">Confección (Satelite) - materia prima</option>
                    <option value="Baja - materia prima">Baja - materia prima</option>
                    <option value="Baja - insumo">Baja - insumo</option>
                </select>                  
            </div>
            <div class="from_group">
                <input type="number"  class="from_input" placeholder="Número de factura" name="num_factura" value="<?php if(isset($num_factura)) echo $num_factura;?>">
            </div>
            <div class="from_group">
                <input type="number"  class="from_input" placeholder="Cantidad" name="cantidad" value="<?php if(isset($cantidad)) echo $cantidad;?>"
                required maxlength="10" minlength="10">
            </div>
            <input type="submit" value="Registrar" class="form_submit" class="gap" name="Registrar">
            <input type="submit" value="Limpiar" class="form_submit" class="gap" name="Limpiar">
    
        </div>
    </form>
@stop

