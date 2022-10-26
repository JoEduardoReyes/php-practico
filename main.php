<?php

$palabras = array('Sol', 'Luna', 'Cielo', "Luz", "Estrellas", "Lluvia");


$form = "<form action='analisis.php'>";
$button = "<button type='submit'>Enviar</button>";
$formClosing = "</form>";

for ($i = 0; $i < count($palabras); $i++) {
  $form .= "La Palabra: " . str_shuffle($palabras[$i]) . " " . "<input type='text' name='palabra$i'></br>";
}

echo $form.$button.$formClosing;