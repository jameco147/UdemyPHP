<?php

$paises = ["Mexico", "España" , "Colombia" , "Peru" ,
        "Argentina" , "Venezuela" , "Guatemala"

];

//foreach($paises as $pais){
  //  if ($pais == "España") {
    //  break;
    //}
    //echo "<li>" . $pais . "</li>";

//}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Paises Latinoamericanos</h1>
    <?php

    foreach ($paises as $pais) {

      if ($pais == "España") {
        continue;
      }
      echo $pais . "<br>";
    }
    ?>
  </body>
</html>
