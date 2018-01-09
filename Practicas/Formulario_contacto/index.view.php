<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario de Contacto</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>

    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre:" value="">

            <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo:" value="">

            <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:" ></textarea>

            <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
        </form>
    </div>


  </body>
</html>
