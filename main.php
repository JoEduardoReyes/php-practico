<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <?php

$palabras = array('Sol', 'Luna', 'Cielo', "Luz", "Estrellas", "Lluvia");


$form = "<form action='analisis.php'>";
$button = "<button type='submit'>Enviar</button>";
$formClosing = "</form>";

for ($i = 0; $i < count($palabras); $i++) {
  $form .= "La Palabra: " . str_shuffle($palabras[$i]) . " " . "<input type='text' name='palabra$i'></br>";
}

echo $form.$button.$formClosing;

?>
</body>

</html>