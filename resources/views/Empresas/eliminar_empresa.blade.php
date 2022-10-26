<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elimiar Empresa</title>
    <link rel="stylesheet" href="css/eliminar_empresa.css">
    <link rel="stylesheet" href="css/ver_factura.css">
</head>

<body>
    <header>
        <nav class="menu">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <a for="check"><img src="img/icons8-menú-50.png" alt="" id="boton" height="52vh"></a>
            </label>
            <img class="logo" src="{{ asset('img\Logo letra blanca.png')}}" alt="" height="70vh">
            <ul class="lista">
                <li><a href="main.html" class="active">Menú</a></li>
                <li><a href="empresas.html">Ver</a></li>
                <li><a href="registrar_empresa.html">Registrar</a></li>
                <li><a href="editar_empresa.html">Editar</a></li>
                <li><a href="" class="icon_cs">Salir</a></li>
            </ul>
        </nav>
    </header>
    <form class="registrar_usuario" action="eliminar_empresa.php" method="POST" enctype="multipart/form-data">
        <h2 class="form_titulo">Eliminar empresa</h2>

        <div class="form_container">
            <div class="from_group">
                <input type="text" name="nit" class="from_input" placeholder="Ingrese la Nit de la empresa que desea eliminar ">
            </div>
            <button class="form_submit" type="submit"><strong>Eliminar informacion</strong></button>
        </div>
    </form>
    <div id="btn_cerrar_sesion">
        <a href="/login.php">Cerrar sesion<img src="img/log-out-regular-24.png" alt=""></a>
    </div>
    <script src="js/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
