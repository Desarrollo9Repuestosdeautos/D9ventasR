<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>descripción</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/estilo.css" rel="stylesheet" type="text/css" />
  </head>
  <body bgcolor="#DDE3FA" align="left">




       <div id="logos"></div>

  </body>
</html>
<?php

include 'db.php' ;
echo conectar();

$ID = $_POST ['ID'];


//$select = mysql_query("SELECT * FROM  inventario2 where codigo = '$codigo1'");

$select = mysql_query("SELECT * FROM  inventario2 where ID = '$ID'");

while ($descripcion = mysql_fetch_array($select))

{
  $imagenes = $descripcion ['imagen1'];
  $precio   = $descripcion ['precio'];
  $vendedor   = $descripcion ['vendedor1'];
  $nombre   = $descripcion ['nombre_producto'];
  $descripcion   = $descripcion ['descripcion'];
//  $envio   = $descripcion [envio];







//  echo $imagenes;
echo "<center>";
  echo "<img src = '$imagenes' width ='280' height = '280'";
  echo "<br>";
  echo "</br>";
  echo "<label>";
  echo "precio: ";
  echo "</label>";

  echo $precio;
  echo "<br>";
  echo "<br>";
  echo "<label>";
  echo "vendedor: ";
  echo $vendedor;
  echo "<br>";
  echo "<br>";
  echo "<label>";
  echo "nombre del producto: ";
  echo $nombre;
  echo "<br>";
  echo "<br>";
  echo "<label>";
  echo "descripcion: ";
  echo $descripcion;
  echo "<br>";

  echo "<br>";
  echo "<br>";

echo "</center>";

}
echo "<center>";
echo '<a href="carritoCompra/vercarrito.php">Comprar</a>';
//echo ' <input type="submit" name="name" value="comprar">';
echo "</center>";

echo "<br>";
echo '<a href="index.php">Volver al Catálogo</a>';




 ?>
