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
  echo "<img src = '$imagenes' width ='200' height = '200'";
  echo "<br>";
  echo "</br>";
  echo "<label>";
  echo "precio:";
  echo "</label>";

  echo $precio;
  echo "<br>";
  echo "<br>";
  echo "<label>";
  echo "vendedor:";
  echo $vendedor;
  echo "<br>";
  echo "<br>";
  echo "<label>";
  echo "nombre del producto:";
  echo $nombre;
  echo "<br>";
  echo "<br>";
  echo "<label>";
  echo "descripcion:";
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
echo '<a href="index.php">volver a catalogo</a>';




 ?>
