<?php

if (isset($_COOKIE['font-size'])) {
  $tamaño = htmlspecialchars($_COOKIE['font-size']);
} else {
    $tamaño = '15px';
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>

      p {
        font-size: <?php echo $tamaño; ?>;
      }

    </style>
  </head>
  <body>
    <p>Lorem Lorem Lorem</p>

  </body>
</html>
