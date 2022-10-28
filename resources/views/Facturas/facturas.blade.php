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
            <tr>
                <td data-label="Nu.factura"></td>
                <td data-label="Fecha"></td>
                <td data-label="Tipo de factura"></td>
                <td data-label="Valor unitario"></td>
                <td data-label="cantidad"></td>
                <td data-label="iva"></td>
                <td data-label="Sub total"></td>
                <td data-label="Total"></td>
                <td data-label="Descripción"></td>
                <td data-label="Codigo articulo"></td>
                <td data-label="Nit"></td>
                <td data-label="Id usuario"></td>
                <td data-label="Editar"><a href="{{route('edit_factura')}}">Editar</a> </td>
            </tr>
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
@stop
