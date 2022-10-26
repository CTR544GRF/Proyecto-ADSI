<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Empresas</title>
    <link rel="stylesheet" href="{{ asset('css/registrar_empresa.css')}}">
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
                <li><a href="{{ route('ver_empresa')}}">Ver</a></li>
                <li><a href="" class="icon_cs">Salir</a></li>
            </ul>
        </nav>
    </header>
    <form class="registrar_usuario" action="registrar_empresa.php" method="POST" enctype="multipart/form-data">
        <h2 class="form_titulo">Registrar empresa</h2>
        <div class="form_container">
            <div class="from_group">
                <input type="text" name="nit" class="from_input" placeholder="Nit" required>
            </div>
            <div class="from_group">
                <input type="text" name="nombre" class="from_input" placeholder="Nombre" required>
            </div>
            <div class="from_group">
                <input type="text" name="telefono" class="from_input" placeholder="Teléfono" required>
            </div>
            <div class="from_group">
                <input type="text" name="direccion" class="from_input" placeholder="Direccion" required>
            </div>
            <div class="from_group">
                <input type="email" name="e_mail" class="from_input" placeholder="E-mail" required>
            </div>
            <!-- <div class="from_group">
                <input type="number" name="cod_ciudad" class="from_input" placeholder="cod_ciudad" required>
                </div> -->
            <div class="from_group">
                <input type="text" name="id_usuario" class="from_input" placeholder="Id - Usuario" required>
            </div>
            <button name="registrar" type="submit" class="form_submit"><strong>Registrar empresa</strong></button>
        </div>
    </form>
    <div id="btn_cerrar_sesion">
        <a href="/login.php">Cerrar sesion <img src="img/log-out-regular-24.png" alt=""></a>
    </div>
    <script src="js/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
