<!DOCTYPE html>
<html lang="en">

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
  <div>
    <h1>Calcula tus descuentos!</h1>
    <form method="post" id="formulario de descuentos">
      <label for="precioSinDescuento">Inserta el precio del producto para calular tu descuento del 35%</label>
      <input type="number" name="precioSinDescuento" id="precioSinDescuento">
      <input type="submit" value="Calcular Descuento">
    </form>
    <?php
      if(array_key_exists('precioSinDescuento', $_POST)) {
        echo "<p>El precio de su producto con el 35% de descuento es: "
        . imprimirPrecioConDescuento($_POST['precioSinDescuento'])
        . "</p>"; // llamar a la funcion precio con descuento
      }
      function imprimirPrecioConDescuento($precio) {
        $precio = (int) $precio;
        $precioConDescuento = ($precio / 100) * 75;
        return $precioConDescuento;
      }
    ?>
  </div>
</body>

</html>