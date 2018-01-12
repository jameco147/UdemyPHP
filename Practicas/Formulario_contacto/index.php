<?php

$errores = "";
$enviado = "";

if (isset($_POST["submit"])) {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    if (!empty($nombre)) {
      $nombre = trim($nombre);              //Con la funcion trim evitamos que el usuario escriba espacios al inicio o al final.
      $nombre = filter_var($nombre, FILTER_SANITIZE_STRING); //Con esta funcion elimino caracteres que no nos sirven.
    } else {
      $errores .= "Por favor introduce un nombre <br>";

    }

    if (!empty($correo)) {
      $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);


        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
          $errores .= "Por favor introduce un correo válido <br>";
        }
    } else {
      $errores .= "Por favor introduce un correo <br>";
    }

    if (!empty($mensaje)) {
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje);
    } else {
        $errores .= "Por favor introduce un mensaje <br>";
    }

    if (!$errores) {
      $enviar_a = "jmerinocoll@gmail.com";
      $asunto = "Lo que yo quiera";
      $mensaje_preparado = "De: $nombre \n ";
      $mensaje_preparado .= "Correo : $correo \n";
      $mensaje_preparado .= "Mensaje :" . $mensaje;

      //mail($enviar_a, $asunto, $mensaje_preparado);   //Esta funcion puede que no funcione porque Xampp no lo reconoce. Esto funciona al subir la web a un hosting.

      $enviado =  true;
    }
}


require 'index.view.php';

?>
