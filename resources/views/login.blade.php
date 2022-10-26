<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
    <!-- <form class="inicio_Secion" action="main" method="POST"> -->
    <form class="inicio_Secion" >
        <img src="img/WhatsApp_Image_2022-08-02_at_1.40.46_PM .svg" alt="logo" height="120em" >
        <h2 class="form_titulo">Iniciar Sesión</h2>
        <div class="from_container">
            <div class="from_group">
                <input type="email" id="E-mail" class="from_input" placeholder=" " name="correo" required>
                <label for="E-mail" class="from_label">E-mail</label>
                <span class="from_line"></span>
            </div>
            <div class="from_group">
                <input type="password" id="password" class="from_input" placeholder=" " name="contraseña" required minlength="6">
                <label for="password" class="from_label">Contraseña</label>
                <span class="from_line"></span>
                
            </div>
            <div>
                <a id="form_rc" href="recuperar_contraseña.php">Recuperar Contraseña</a>
            </div>
            <!-- <input type="submit" value="Ingresar" class="form_submit" name="submit"> -->
            <a href="main"><input value="Ingresar" class="form_submit" name="submit"></a>
        </div>
    </form>
</body>

</html>