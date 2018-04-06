<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,
    initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="https://use.fontawesome.com/b9d398e203.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registrate</title>
  </head>
  <body>
    <div class="contenedor">
      <h1 class="titulo">Registrate</h1>
      <hr class="border">

      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post" class="formulario" name="login">
        <div class="form-group">
          <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
        </div>

        <div class="form-group">
          <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password" placeholder="Contraseña">
        </div>

        <div class="form-group">
          <i class="icono izquierda fa fa-lock"></i><input type="password" name="password2" class="password_btn" placeholder="Repetir contraseña">
          <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
        </div>

      </form>
      <p class="texto-registrate">
        ¿ Ya tienes cuenta ?
        <a href="login.php">Iniciar Sesión</a>
      </p>  
    </div>

  </body>
</html>
