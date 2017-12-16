<?php

function calcular_area_triangulo($base, $altura){
  $resultado = ($base * $altura) / 2;
  return $resultado;

}

echo ("El triángulo tiene un área de " . calcular_area_triangulo(10, 10) . " metros cuadrados.");






?>
