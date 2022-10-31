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
            @foreach ($articulos_view as $articulo )
            <tr>
                <td data-label="Codigo articulo">
                    {{$articulo->cod_articulo}}
                </td>
                <td data-label="Tipo articulo">
                    {{$articulo->tipo_articulo}}
                </td>
                <td data-label="Nombre">
                    {{$articulo->nom_articulo}}
                </td>
                <td data-label="Material">
                    {{$articulo->material_articulo}}
                </td>
                <td data-label="Talla">
                    {{$articulo->talla_articulo}}
                </td>
                <td data-label="Linea">
                    {{$articulo->linea}}
                </td>
                <td data-label="Unidad de medida">
                    {{$articulo->unidad_medida}}
                </td>
                <td data-label="Color">
                    {{$articulo->color_articulo}}
                </td>
                <td data-label="Descripcion">
                    {{$articulo->descripcion_articulo}}
                </td>
                <td data-label="Editar"><a href="{{ route('edit_articulo', $articulo ) }}">Editar</a> </td>
                <form action="{{route('delete_articulo',$articulo)}}" method="post" class="eliminar_datos">
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
