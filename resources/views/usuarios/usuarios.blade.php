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

<!-- Titulo -->
@section('titulo')
{{ 'Usuarios'}}
@stop

@section('seccion')
<div class="tabla">

    <div class="alingdownload">
        <div class="downloads">
            <button class="btn_download"><span>CSV</span></button>
            <button class="btn_download"><span>EXEL</span></button>
            <button class="btn_download"><span>PDF</span></button>
            <button class="btn_download"><span>IMPRIMIR</span></button>
        </div>
        <input class="form" id="myInput" type="text" placeholder="Buscar ...">
    </div>

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
            @foreach ($usuarios as $usuario)
            <tr>
                <td data-label="Id">{{$usuario->id_user}}</td>
                <td data-label="Nombre">{{$usuario->nom_user}}</td>
                <td data-label="Apellido">{{$usuario->apellidos_user}}</td>
                <td data-label="Telefono">{{$usuario->telefono_user}}</td>
                <td data-label="Direccion">{{$usuario->direccion_user}}</td>
                <td data-label="E-mail">{{$usuario->email_user}}</td>
                <td data-label="Rol">{{$usuario->cod_rol}}</td>
                <td data-label="Editar"><a href="{{ route('edit_usuario',$usuario) }}">Editar</a></td>
                <form action="{{route('delete_usuario',$usuario)}}" method="post" class="eliminar_datos">
                    @csrf
                    @method('delete')
                    <td class="eliminartd" data-label="">
                        <button class="btn_eliminar" type="submit">
                            Eliminar
                        </button>
                    </td>
                </form>
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
    <!-- <script>
        $(function() {
            $("#tableUsers").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#tableUsers_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script> -->
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
