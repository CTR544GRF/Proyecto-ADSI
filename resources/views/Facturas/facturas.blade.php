<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Facturas</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('css/ver_factura.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
        <button class="logo">
            <img height="70vw" src="{{ asset('img\Logo letra blanca.png')}}" alt="logo">
        </button>
        <button class="btn_menu">
            <div class="btn_first"></div>
            <div class="btn_second"></div>
            <div class="btn_tercer"></div>
        </button>
        <nav class="nav">
            <ul class="lista">
                <li><a href=" {{ route('main')}}" class="active">Menu</a></li>
                <li><a href="{{ route('reg_factura')}}">Registrar</a></li>
            </ul>
        </nav>

    </header>

    <div class="tabla">
        <input class="form" id="myInput" type="text" placeholder="Buscar ...">
        <table>
            <thead>
                <tr>
                    <th>Nu. factura</th>
                    <th>Fecha</th>
                    <th>Tipo de factura</th>
                    <th>Valor unitario</th>
                    <th>cantidad</th>
                    <th>iva</th>
                    <th>Sub total</th>
                    <th>Total</th>
                    <th>Descripción</th>
                    <th>Codigo articulo</th>
                    <th>Nit</th>
                    <th>Id usuario</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="myTable">
                <tr>
                    <td data-label="Nu.factura"><?php // echo $opciones['num_factura']
                                                ?></td>
                    <td data-label="Fecha"><?php // echo $opciones['fecha']
                                            ?></td>
                    <td data-label="Tipo de factura"><?php // echo $opciones['tipo_factura']
                                                        ?></td>
                    <td data-label="Valor unitario"><?php // echo $opciones['valor_unitario']
                                                    ?></td>
                    <td data-label="cantidad"><?php // echo $opciones['cantidad']
                                                ?></td>
                    <td data-label="iva"><?php // echo $opciones['iva']
                                            ?></td>
                    <td data-label="Sub total"><?php  //echo $opciones['sub_Total']
                                                ?></td>
                    <td data-label="Total"><?php //echo $opciones['total']
                                            ?></td>
                    <td data-label="Descripción"><?php //echo $opciones['descripcion']
                                                    ?></td>
                    <td data-label="Codigo articulo"><?php //echo $opciones['cod_articulo']
                                                        ?></td>
                    <td data-label="Nit"><?php //echo $opciones['nit_empresa']
                                            ?></td>
                    <td data-label="Id usuario"><?php //echo $opciones['id_user']
                                                ?></td>
                    <td data-label="Editar"><a class="a" href="editar_factura.php?id=<?php // echo $opciones['num_factura']
                                                                                        ?>"><img src="img/pencil-square.svg" alt=""></a></td>
                </tr>
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
    <div class="div_cerrar">
        <a href="login.php" class="btn_cerrar">
            <h3>Cerrar sesión</h3><img src="img/log-out-regular-24.png" alt="">
        </a>
        <!-- </div>
    <script src="js/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
</body>

</html>
