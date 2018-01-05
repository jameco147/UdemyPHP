<?php


if (!$_POST) {
  header('Location: http: //localhost/Aprender/Formularios/');

} else {
  $nombre = $_POST["nombre"];
  $sexo = $_POST["sexo"];
  $year = $_POST["year"];
  $terminos = $_POST["terminos"];

  echo "Hola " . $nombre . " eres " . $sexo . ".";
}

?>
