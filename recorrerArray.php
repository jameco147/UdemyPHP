<?php

$meses= array(
    "Enero", "Febrero", "Marzo", "Abril",
    "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
    "Octubre", "Noviembre", "Diciembre"
  );


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <h1>Meses del Año</h1>
  <ul>
    <?php

    foreach($meses as $mes){
      echo "<li>" . $mes . "</li>";


    }




    ?>





  </ul>




</body>
  </html>
