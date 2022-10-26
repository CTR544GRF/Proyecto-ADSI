<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas</title>
    <link rel="stylesheet" href="{{ asset('css/empresa.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
        <nav class="menu">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <a for="check"><img src="img/icons8-menú-50.png" alt="" id="boton" height="52vh"></a>
            </label>
            <a href="main.php"><img class="logo" src="{{ asset('img\Logo letra blanca.png')}}" alt="" height="70vh"></a>
            <ul class="lista">
                <li><a href="{{ route('main')}}" class="active">Menú</a></li>
                <li><a href="{{ route('reg_empresa')}}">Registrar</a></li>
                <li><a href="" class="icon_cs">Salir</a></li>
            </ul>
        </nav>
    </header>
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
            <!-- <tbody id="myTable">

                    <tr>
                        <td data-label="Nit"><?php // echo $mostrar['nit_empresa']
                                                ?></td>
                        <td data-label="Nombre"><?php // echo $mostrar['nom_empresa']
                                                ?></td>
                        <td data-label="Teléfono"><?php  //echo $mostrar['tel_empresa']
                                                    ?></td>
                        <td data-label="Dirección"><?php // echo $mostrar['direccion_empresa']
                                                    ?></td>
                        <td data-label="E-mail"><?php // echo $mostrar['email_empresa']
                                                ?></td>
                        <td data-label="Id User"><?php // echo $mostrar['id_user']
                                                    ?></td>
                        <td data-label="Editar"><a class="a" href="editar_empresas.php?nit=<?php // echo $mostrar['nit_empresa']
                                                                                            ?>">Editar</a></td>
                        <td data-label="Eliminar"><a class="a" href="script/eliminar_empresas.php?nit=<?php // echo $mostrar['nit_empresa']
                                                                                                        ?>"
                        onclick="return confirmdelte()">Eliminar</a></td>
                    </tr>
            </tbody> -->
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
    <div id="btn_cerrar_sesion">
        <a href="/login.php">Cerrar sesión <img src="img/log-out-regular-24.png" alt=""></a>
    </div>
</body>
<script src="{{ asset('js/eliminar_empresa.js')}}"></script>

</html>
