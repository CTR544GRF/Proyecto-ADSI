@extends('plantilla')

@section('estilos')
    {{asset('css/tabla.css')}}
@stop

@section('link-logo')
    {{'../main'}}
@stop

@section('img-logo')
    {{'../img/Logo letra blanca.png'}}
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
            <li><a href="registrar_usuario.php" >Registrar</a></li>
            </ul>
        </nav>
    </header>
<div class="tabla" >
    <input class="form" id="myInput" type="text" placeholder="Buscar ...">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Codigo entrada</th>
                    <th>Codigo articulo</th>
                    <th>Casual de entrada</th>
                    <th>Numero de factura</th>
                    <th>cantidad</th>
                </tr>
            </thead>
            <tbody id="myTable">
                <tr>
                    <td data-label="codigoE" ></td>
                    <td data-label="codigoA" ></td>
                    <td data-label="causal" ></td>
                    <td data-label="numeroF" ></td>
                    <td data-label="cantidad" ></td>
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

