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

  #entradasDeProducto {
    width: 500px;
    display: grid;
    grid-template-columns: 60% 40%;
    gap: 10px;
  }
  </style>
</head>

<body>
  <div>
    <h1>Ordena los productos de mayor a menor</h1>
    <form method="post" id="formularioDeCantidad">
      <label for="cantidadDeProductos">Ingresa la cantidad de productos a guardar en la lista: </label>
      <input type="number" name="cantidadDeProductos" id="cantidadDeProductos">
      <input type="submit" value="Enlistar Productos">
    </form>
    <?php
    //Debugger
    // Variables
    $form = "<form action='list.php' id='entradasDeProducto'>";
    $button = "<button type='submit'>Calcular Orden</button>";
    $formClosing = "</form>";
    // form creator
    if (array_key_exists("cantidadDeProductos", $_POST)) {
      for ($i=0; $i < $_POST["cantidadDeProductos"]; $i++) {
        $productNumber = $i + 1;
        $form .= "<label for='nombreProducto$productNumber'>Inserta el nombre del producto $productNumber</label>"
        . "<input type='text' name='nombreProducto$productNumber' id='nombreProducto$productNumber'>"
        . "<label for='alturaProducto$productNumber'>Inserta la altura del producto $productNumber</label>"
        . "<input type='number' name='alturaProducto$productNumber' id='alturaDelProducto$productNumber'>"
        . "<label for='anchuraProducto$productNumber'>Inserta la anchura del producto $productNumber</label>"
        . "<input type='number' name='anchuraProducto$productNumber' id='anchuraProducto$productNumber'>";
      }
      echo $form . $button . $formClosing;
    };
    ?>
  </div>
</body>

</html>