@extends('plantilla')

<!--estilo css -->
@section('estilos')
{{asset('css/tablas.css')}}
@stop

<!-- Titulo -->
@section('titulo')
{{ 'Inventario'}}
@stop

@section('seccion')
<div class="tabla">
    <input class="form" id="myInput" type="text" placeholder="Buscar ...">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Codigo articulo</th>
                <th>Tipo articulo</th>
                <th>Descripcion articulo</th>
                <th>Stock</th>

            </tr>
        </thead>
        <tbody id="myTable">
            <tr>
                <td data-label="Codigo articulo" ></td>
                <td data-label="Tipo articulo" ></td>
                <td data-label="Descripcion articulo" ></td>
                <td data-label="Stock" ></td>

            </form>
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