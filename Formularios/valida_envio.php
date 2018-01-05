<?php
/*
if ($_SERVER["REQUEST_METHOD"] == "get") {
    echo "Se enviaron por GET";
} else {
    echo "Se enviaron por POST";
}
*/

if (isset($_POST["submit"])) {
  echo "Se han enviado los datos correctamente";
}



?>
