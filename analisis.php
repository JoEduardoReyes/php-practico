<?php

$palabras = array('Sol', 'Luna', 'Cielo', "Luz", "Estrellas", "Lluvia");

for ($i=0; $i < count($palabras); $i++) {
  if ($_REQUEST["palabra".$i] == $palabras[$i]) {
    echo "La palabra es correcta <br />";
  } else {
    echo "La palabra es incorrecta, la palabra correcta es $palabras[$i] <br />";
  }
}

?>