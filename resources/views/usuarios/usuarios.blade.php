@extends('plantilla')

<!--estilo css -->
@section('estilos')
{{asset('css/tablas.css')}}
@stop

<!--link nav -->
@section('link')
{{ route('reg_usuario')}}
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
{{ 'Usuarios'}}
@stop

@section('seccion')
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
                @foreach ($usuarios as $item)
                <tr>
                    <td data-label="Id" >{{$item->id_user}}</td>
                    <td data-label="Nombre" >{{$item->nom_user}}</td>
                    <td data-label="Apellido" >{{$item->apellidos_user}}</td>
                    <td data-label="Telefono" >{{$item->telefono_user}}</td>
                    <td data-label="Direccion" >{{$item->direccion_user}}</td>
                    <td data-label="E-mail" >{{$item->email_user}}</td>
                    <td data-label="Rol" >{{$item->cod_rol}}</td>
                    <td data-label="Editar"><a href="{{ route('edit_usuario')}}">Editar</a></td>
                    <td data-label="Eliminar"><a onclick="return confirmdelte()">Eliminar</a></td>
                </tr>
                @endforeach
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