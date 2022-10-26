<?php

print_r($_REQUEST);

$palabras = array('Sol', 'Luna', 'Cielo');

if ($_REQUEST["palabra0"] == $palabras[0]) {
  echo "La palabra es correcta";
} else {
  echo "La palabra es incorrecta";
}

if ($_REQUEST["palabra1"] == $palabras[1]) {
  echo "La palabra es correcta";
} else {
  echo "La palabra es incorrecta";
}

if ($_REQUEST["palabra2"] == $palabras[2]) {
  echo "La palabra es correcta";
} else {
  echo "La palabra es incorrecta";
}

?>