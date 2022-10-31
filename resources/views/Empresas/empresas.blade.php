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
            @foreach ($empresas_view as $empresa)
            <tr>
                <td data-label="Nit">
                    {{$empresa->nit_empresa}}
                </td>
                <td data-label="Nombre">
                    {{$empresa->nom_empresa}}
                </td>
                <td data-label="Teléfono">
                    {{$empresa->tel_empresa}}
                </td>
                <td data-label="Dirección">
                    {{$empresa->direccion_empresa}}
                </td>
                <td data-label="E-mail">
                    {{$empresa->email_empresa}}
                </td>
                <td data-label="Id User">
                    {{$empresa->id_user}}
                </td>
                <td data-label="Editar"><a href="{{ route('edit_empresa', $empresa ) }}">Editar</a> </td>
                <form action="{{route('delete_empresa',$empresa)}}" method="post" class="eliminar_datos">
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
