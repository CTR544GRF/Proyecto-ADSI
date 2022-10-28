@extends('plantilla')

<!--estilo css -->
@section('estilos')
{{asset('css/factura.css')}}
@stop

<!--link nav -->
@section('link')
{{ route('ver_factura')}}
@stop

<!-- palabra nav -->
@section('palabra-accion')
{{'Ver'}}
@stop

<!--link nav2 -->
@section('link2')
{{ route('reg_factura')}}
@stop

<!-- palabra nav2 -->
@section('palabra-accion2')
{{'Registar'}}
@stop

<!-- Script js -->
@section('script')
{{ asset('js/registro_factura.js')}}
@stop

<!-- Titulo -->
@section('titulo')
{{ 'Editar Factura'}}
@stop

@section('seccion')
<main class="formularios">
    <form action="script/update_facturacion.php" method="POST" enctype="multipart/form-data">
        <section class="seccion_uno">
            <button class="crear_factura" type="reset">
                <svg class="svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                </svg>
                <h3> Editar Factura</h3>
            </button>

            <div class="imprimir">
                <button>
                    <svg class="svg" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                        <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                        <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
                    </svg>
                </button>
                <button>
                    <svg class="svg" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                        <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z" />
                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                    </svg>
                </button>
            </div>
            <hr>
        </section>
        <section class="seccion_dos">
            <div id="seccion_two_left">
                <h3>Codigo de Factura</h3>
                <input type="text" placeholder="Nu. Factura" name="num_factura" id="num_factura" value="" required>
                <h4>Tipo de Factura</h4>
                <select name="tipo_factura" id="Tipo_Factura" required>
                    <option value='venta'>Factura de Venta</option>
                    <option value='compra'>Factura de Compra</option>
                </select>
                <h4>Nit de Empresa</h4>
                <input type="text" placeholder="Nit de Empresa" name="nit_empresa" value="" required>
            </div>
            <div id="seccion_two_rigth">
                <h4>Fecha</h4>
                <input type="date" name="fecha" id="fecha_factura" placeholder="Fecha" value="" required>
                <h4>Id Usuario</h4>
                <input type="text" placeholder="Id Usuario" value="" name="id_user" required>
            </div>
        </section>
        <section class="seccion_tres">
            <div class="cajas">
                <h3>#</h3>
                <div class="tbl_abajo">
                    <span id="resultado_num_factura"></span>
                </div>
            </div>
            <div class="cajas">
                <h3>Cod Articulo</h3>
                <div class="tbl_abajo">
                    <select name="cod_articulo" id="cod_articulo" required>
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <!-- Fin del codigo PHP -->
            <div class="cajas">
                <h3>Precio Unitario</h3>
                <div class="tbl_abajo">
                    <span>$</span>
                    <input type="number" name="valor_unitario" min="1" id="precio_unitario" value="" required>
                </div>
            </div>
            <div class="cajas">
                <h3>Cantidad</h3>
                <div class="tbl_abajo">
                    <input type="number" name="cantidad" min="1" id="valor_cantidad" value="" required>
                </div>
            </div>
            <div class="cajas" id="iva">
                <h3>Iva</h3>
                <div class="tbl_abajo">
                    <input type="number" name="iva" id="valor_iva" min="1" max="100" value="" required>
                    <span>%</span>
                </div>
            </div>
        </section>

        <section class="seccion_cuatro">
            <div class="scs_cuatro_arriba">
                <input type="text" id="Descripcion" name="descripcion" placeholder="Descripcion..." value="">
                <div class="total">
                    <h3>Sub Total: <span id="resultado_sub_total"></span></h3>
                    <h3>iva: <span id="resultado_iva"></span>
                    </h3>
                    <h2>Total: <span id="resultado_total"></span>
                    </h2>
                </div>
            </div>
            <div class="scs_cuatro_abajo">
                <button class="button" type="reset">
                    <h3>Limpiar</h3>
                </button>
                <button class="button" type="submit" name="registrar">
                    <h3>Editar</h3>
                </button>
            </div>
        </section>
    </form>
</main>
@stop
