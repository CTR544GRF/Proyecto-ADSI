@extends('plantilla')

<!--estilo css -->
@section('estilos')
{{asset('css/tablas.css')}}
@stop

<!--link nav -->
@section('link')
{{ route('reg_salida')}}
@stop

<!-- palabra nav -->
@section('palabra-accion')
{{'Registrar'}}
@stop


<!-- Titulo -->
@section('titulo')
{{ 'Salidas'}}
@stop

@section('seccion')
    <div class="tabla" >
        <input class="form" id="myInput" type="text" placeholder="Buscar ...">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Codigo salida</th>
                    <th>Codigo articulo</th>
                    <th>Casual de salida</th>
                    <th>Numero de factura</th>
                    <th>Cantidad</th>
                    
                </tr>
            </thead>
            <tbody id="myTable">
                <tr>
                    <td data-label="codigoS" ></td>
                    <td data-label="codigoA" ></td>
                    <td data-label="causal" ></td>
                    <td data-label="numeroF" ></td>
                    <td data-label="cantidad" ></td>
                </tr>
            </tbody>
        </table>
        <script>
        $(document).ready(function(){
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

