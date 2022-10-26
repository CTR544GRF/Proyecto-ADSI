@extends('plantilla')

@section('estilos')
    {{asset('css/tabla.css')}}
@stop

@section('link')
    {{'usuarios/registrar'}}
@stop

@section('palabra-accion')
    {{'registrar'}}
@stop

@section('link2')    
    {{''}}
@stop

@section('palabra-accion2')
    {{''}}
@stop

@section('seccion')
@stop
    <div class="tabla">
        <input class="form" id="myInput" type="text" placeholder="Buscar ...">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>E-mail</th>
                    <th>Rol</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="myTable">
                <tr>
                    <td data-label="Id" ></td>
                    <td data-label="Nombre" ></td>
                    <td data-label="Apellido" ></td>
                    <td data-label="Telefono" ></td>
                    <td data-label="Direccion" ></td>
                    <td data-label="E-mail" ></td>
                    <td data-label="Rol" ></td>
                    <td data-label="Editar"><a href="usuarios/editar">Editar</a></td>
                    <td data-label="Eliminar">Eliminar</td>
                </tr>
            <?php
      
            ?>
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