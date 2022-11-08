<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title><!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
  body {
    padding: 50px;
  }
  </style>
</head>

<body>
  <main>
    <?php
    // debugger
    // variables
    $listaDeProductos_area_menor = array();
    $listaDeProductos_ordenados = array();
    // new array order
    for ($i=0; $i < (count($_REQUEST) / 3); $i++) {
      $listaDeProductos_area_menor += array(
        $_REQUEST["nombreProducto".$i+1] => ($_REQUEST["alturaProducto".$i+1] * $_REQUEST["anchuraProducto".$i+1])
      );
    }
    natsort($listaDeProductos_area_menor);
    $listaDeProductos_area_mayor = array_reverse($listaDeProductos_area_menor, true);
    // new array creator
    $counter=0;
    foreach ($listaDeProductos_area_mayor as $key => $value) {
      $listaDeProductos_ordenados[$counter] = array(
        "nombreDelProducto" => $key,
        "areaDelProducto" => $value
      );
      $counter++;
    }
    ?>
    <h1>
      Lista de productos ordenados
    </h1>
    <p>Esta es la lista de productos ordenados del mayor al menor</p>
    <ol>
      <?php
      foreach ($listaDeProductos_ordenados as $key) {
        echo "<li>".$key['nombreDelProducto']." , ".$key['areaDelProducto']."&quot </li>";
      }
      ?>
    </ol>
  </main>
</body>

</html>