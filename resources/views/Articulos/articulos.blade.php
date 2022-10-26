@extends('plantilla')

<!--estilo css -->
@section('estilos')
    {{asset('css/tablas.css')}}
@stop

<!--link nav -->
@section('link')
    {{ route('reg_articulo')}}
@stop
 <!-- palabra nav -->
@section('palabra-accion')
    {{'Registrar'}}
@stop
<!-- Script js -->
@section('script')
    {{ asset('js/eliminar.js')}}
@stop
<!-- Titulo -->
@section('titulo')
    {{ 'Articulos'}}
@stop

@section('seccion')

<div class="tabla">
        <input class="form" id="myInput" type="text" placeholder="Buscar ...">
        <table class="table table-bordered"> 
            <thead>
                <tr>
                    <th>Codigo articulo</th>
                    <th>Tipo articulo</th>
                    <th>Nombre</th>
                    <th>Material</th>
                    <th>Talla</th>
                    <th>Linea</th>
                    <th>Unidad de medida</th>
                    <th>Color</th>
                    <th>Descripcion</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="myTable">
                <tr>
                    <td data-label="Codigo articulo" ></td>
                    <td data-label="Tipo articulo" ></td>
                    <td data-label="Nombre" ></td>
                    <td data-label="Material" ></td>
                    <td data-label="Talla" ></td>
                    <td data-label="Linea" ></td>
                    <td data-label="Unidad de medida" ></td>
                    <td data-label="Color" ></td>
                    <td data-label="Descripcion" ></td>
                    <td data-label="Editar">Editar</td>
                    <td data-label="Eliminar">Eliminar</td>
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
      
