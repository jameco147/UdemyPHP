<?php

$meses = ["Enero", "Febrero", "Marzo", "Abril",
    "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
    "Octubre", "Noviembre", "Diciembre"

];

$alejandro = ["telefono" => 961887452 , "edad" => 20 , "pais" => "mexico" ];


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Meses</h1>
    <ul>
      <?php
        //foreach($meses as $mes) {
          //echo "<li>" . $mes . "</li>";
        //}
        foreach ($alejandro as $dato => $value) {
          echo "<li>" . $dato . " : " . $value . "</li>";
        }

      ?>


    </ul>

  </body>
</html>
