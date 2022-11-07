@extends('plantilla')

<!--estilo css -->
@section('estilos')
{{asset('css/forms.css')}}
@stop

@section('estilos2')
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

<!--link nav2 -->
@section('link2')
{{ route('ver_usuario')}}
@stop

<!-- palabra nav2 -->
@section('palabra-accion2')
{{'Ver'}}
@stop

<!-- Script js -->

<!-- Titulo -->
@section('titulo')
{{ 'Crear rol'}}
@stop



@section('seccion')
<form class="registrar_usuario" action="{{route('post_crear_rol')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h2 class="form_titulo">Crear rol</h2>
    <div class="form_container">
        <div class="from_group">
            <input type="text" id="nom_rol" class="from_input" placeholder="Nombre de rol" name="nombre" required >
        </div>
        <div class="from_group">
        <button class="form_submit" type='submit'> Crear </button>
        </div>

        </form>

        <div class="tabla">
            <input class="form" id="myInput" type="text" placeholder="Buscar ...">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre rol</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="myTable">
                @foreach ($roles as $rol)  
                    <tr>
                        <td data-label="Codigo" >{{$rol->cod_rol}}</td>
                        <td data-label="Nombre" >{{$rol->nom_rol}}</td>
                        <td data-label="Editar"><a href="{{ route('edit_rol',$rol) }}">Editar</a></td>
                        <form action="{{route('delete_rol',$rol)}}" method="post" class="eliminar_datos">
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
    </div>        
@if (session('guardado'))
<script>
    guardado('Registro Exitoso', '<?php echo session('guardado') ?>');
</script>
@endif

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
