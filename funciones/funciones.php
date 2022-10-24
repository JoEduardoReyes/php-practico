<?php

function concaternar ($nombre, $apellido) {
  echo $nombre . " " . $apellido;
}

concaternar("Eduardo", "Reyes");

function sumarNumeros($numeros) {
  $suma = 0;
  for ($i=0; $i < count($numeros); $i++) {
    $suma = $suma + $numeros[$i];
  }
  echo "La suma de los valores del array es $suma";
}

$numeros = array(1,2,3,4);
sumarNumeros($numeros);