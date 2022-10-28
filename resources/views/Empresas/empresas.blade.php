@extends('plantilla')

<!--estilo css -->
@section('estilos')
{{asset('css/tablas.css')}}
@stop

<!--link nav -->
@section('link')
{{ route('reg_empresa')}}
@stop

<!-- palabra nav -->
@section('palabra-accion')
{{'Registar'}}
@stop

<!-- Script js -->
@section('script')
{{ asset('js/eliminar.js')}}
@stop

<!-- Titulo -->
@section('titulo')
{{ 'Empresas'}}
@stop

@section('seccion')
<div class="tabla">
    <input class="form" id="myInput" type="text" placeholder="Buscar ...">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nit</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>E-mail</th>
                <th>Id User</th>
                <!-- <th>Ciudad</th> -->
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody id="myTable">
            <tr>
                <td data-label="Nit"></td>
                <td data-label="Nombre"></td>
                <td data-label="Teléfono"></td>
                <td data-label="Dirección"></td>
                <td data-label="E-mail"></td>
                <td data-label="Id User"></td>
                <td data-label="Editar"><a href="{{route('edit_empresa')}}">Editar</a> </td>
                <td data-label="Eliminar"><a onclick="return confirmdelte()">Eliminar</a></td>
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
