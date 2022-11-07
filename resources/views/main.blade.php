<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>

<body>

    <h1 id="main">Menú</h1>
    <div class="usuario">
        <div class="containers">
            <div class="usuarios">
                <a href="{{ route('ver_usuario')}}"><img src="img/icons8-persona-de-sexo-masculino-64.png" alt="usuarios"></a>
                <h2 class="titulo_usuarios">Usuarios</h2>
            </div>
            <div class="usuarios">
                <a href="{{ route('ver_empresa')}}"><img src="img/icons8-cliente-de-empresa-60.png" alt=""></a>
                <h2 class="titulo_usuarios">Empresas</h2>
            </div>
            <div class="usuarios">
                <a href="{{ route('ver_factura')}}"><img src="img/icons8-invoices-60.png" alt=""></a>
                <h2 class="titulo_usuarios">Facturas</h2>
            </div>
            <div class="usuarios">
                <a href="#"><img src="img/icons8-script-de-informes-de-gráficos.png" alt="usuarios"></a>
                <h2 class="titulo_usuarios">Reportes</h2>
            </div>
        </div>
        <div class="containers">

            <div class="usuarios">
                <a href="{{ route('ver_inventario')}}"><img src="img/icons8-producto-nuevo.png" alt="usuarios"></a>
                <h2 class="titulo_usuarios">Inventario</h2>
            </div>
            <div class="usuarios">
                <a href="{{ route('ver_articulo')}}"><img src="img/icons8-suéter.png" alt=""></a>
                <h2 class="titulo_usuarios">Artículos</h2>
            </div>
            <div class="usuarios">
                <a href="{{ route('ver_entrada')}}"><img src="img/mas2.png" alt="" height="65px"></a>
                <h2 class="titulo_usuarios">Entradas</h2>
            </div>
            <div class="usuarios">
                <a href= "{{ route('ver_salida')}}"><img src="img/menos.png" alt="" height="65px"></a>
                <h2 class="titulo_usuarios">Salidas</h2>
            </div>
        </div>
    </div>
    <div id="btn_cerrar_sesion">
        <a href="login">Cerrar sesión <img src="img/log-out-regular-24.png" alt=""></a>
    </div>
</body>

</html>
