@extends('plantilla')

<!--estilo css -->
@section('estilos')
{{asset('css/tablas.css')}}
@stop

<!--link nav -->
@section('link')
{{ route('reg_factura')}}
@stop

<!-- palabra nav -->
@section('palabra-accion')
{{'Registrar'}}
@stop

<!-- Titulo -->
@section('titulo')
{{ 'Facturas'}}
@stop

@section('seccion')
<div class="tabla">
    <input class="form" id="myInput" type="text" placeholder="Buscar ...">
    <table>
        <thead>
            <tr>
                <th>Nu. factura</th>
                <th>Fecha</th>
                <th>Tipo de factura</th>
                <th>Valor unitario</th>
                <th>cantidad</th>
                <th>iva</th>
                <th>Sub total</th>
                <th>Total</th>
                <th>Descripción</th>
                <th>Codigo articulo</th>
                <th>Nit</th>
                <th>Id usuario</th>
                <th></th>
            </tr>
        </thead>
        <tbody id="myTable">
            @foreach ($facturas_view as $factura)
            <tr>
                <td data-label="Nu.factura">{{ $factura->num_factura }}</td>
                <td data-label="Fecha">{{ $factura->fecha }}</td>
                <td data-label="Tipo de factura">{{ $factura->tipo_factura }}</td>
                <td data-label="Valor unitario">{{ $factura->valor_unitario }}</td>
                <td data-label="cantidad">{{ $factura->cantidad }}</td>
                <td data-label="Sub total">{{ $factura->sub_total }}</td>
                <td data-label="iva">{{ $factura->iva }}</td>
                <td data-label="Total">{{ $factura->total }}</td>
                <td data-label="Descripción">{{ $factura->descripcion }}</td>
                <td data-label="Codigo articulo">{{ $factura->cod_articulo }}</td>
                <td data-label="Nit">{{ $factura->nit_empresa }}</td>
                <td data-label="Id usuario">{{ $factura->id_user }}</td>
                <td data-label="Editar"><a href="{{ route('edit_factura', $factura) }}">Editar</a> </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</div>

<!-- Script js -->
@section('script')
{{ asset('js/eliminar.js')}}
@stop
<!-- Mesajes de confirmacion y error -->
@if (session('destroy'))
<script>
    guardado('Eliminacion Exitosa', '<?php echo session('destroy') ?>');
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
