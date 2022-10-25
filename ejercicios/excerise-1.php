<?php

// Vamos a generar 10 edades de niños de forma aleatoria

$edades = array();

for ($i = 0; $i < 10; $i++) {
  array_push($edades, rand(1, 10));
}

// vamos a clasificar los niños

for ($j = 0; $j < count($edades); $j++) {
  if ($edades[$j] < 5) {
    echo "El estudiante con $edades[$j] años tendrá sus juguetes en la parte inferior de la bodega.";
  } else if ($edades[$j] > 7) {
    echo "En estudiante con $edades[$j] años tendrá sus juguetes en la parte alta de la bodega.";
  } else if ($edades[$j] >= 5 && $edades[$j] <= 7) {
    echo "El estudiante con $edades[$j] años tendrá sus juguetes en la parte media de la bodega.";
  } else {
    echo "El estudiante sin años registrados tendra sus juguetes en la bodega de a lado.";
  }
  echo "\n";
}