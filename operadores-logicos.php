<?php

/* Precedencia de operadores
  https://www.php.net/manual/es/language.operators.precedence.php
  */

$valorA = true;
$valorB = false;

$resultado1 = $valorA && $valorB;
$resultado2 = $valorA and $valorB;

var_dump($resultado1, $resultado2);

?>