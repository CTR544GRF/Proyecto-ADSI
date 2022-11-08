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
                        <td class="btn-editar"  data-modal-editar="{{$rol->cod_rol}}"data-label="Editar">Editar</a></td>
                        
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
                    <div class="modal_actualizar_{{$rol->cod_rol}}" data-modal="{{$rol->cod_rol}}">
                        <div class="container_form_actualizar">
                            <div class="modal_top">
                                <h2 class="form_titulo">Actualizar Rol</h2>
                                <button class="close_modal">cerrar</button>
                            </div>
                            <form class="actualizar_rol" action="{{route('edit_rol',$rol)}}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form_container">
                                    <div class="from_group">
                                        <input type="text" id="nom_rol" class="from_input" placeholder="Nombre de rol" name="nombre"
                                            value="{{$rol->nom_rol}}" required>
                                    </div>
                                    <div class="from_group">
                                        <button class="form_submit" type='submit'> Actualizar </button>
                                    </div>
                
                            </form>
                        </div>
                    </div>
                @endforeach
                </tbody>
                
            </table>
            
               
            
            <script>
            $(document).ready(function () {
                $("#myInput").on("keyup", function () {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function () {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });

                /*Funcion para abrir modal*/
                $('body').on('click', '.btn-editar', function () {
                    let idModal = "modal_actualizar_" + $(this).attr('data-modal-editar');
                    document.querySelector("." + idModal).style.display = "flex";
                    document.querySelector("body").style.overflow = "hidden";
                    document.querySelector("body").style.position = "relative";
                })
                /*Funcion para cerrar modal*/
                $('body').on('click', '.close_modal', function () {
                    $('div[data-modal]').css('display', 'none');
                    document.querySelector("body").style.overflowY = "scroll";
                    console.log("Si está cerrando" + $rol);
                })
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
