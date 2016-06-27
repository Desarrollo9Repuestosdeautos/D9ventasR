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


<?php
echo "<br>";
echo '<a href="index.php">Volver al Catálogo</a>';
include 'db.php' ;
echo conectar();

$ID = $_POST ['ID'];


//$select = mysql_query("SELECT * FROM  inventario2 where codigo = '$codigo1'");

$select = mysql_query("SELECT * FROM  inventario2, categoria where inventario2.ID = '$ID' AND inventario2.categoria = categoria.id");

echo "<br>";
while ($descripcion = mysql_fetch_array($select))

{
  $imagenes = $descripcion ['imagen1'];
  $precio   = $descripcion ['precio'];
  $modelo   = $descripcion ['modelo'];
  $marca   = $descripcion ['marca'];
  $vendedor   = $descripcion ['vendedor1'];
  $nombre   = $descripcion ['nombre_producto'];
    $years   = $descripcion ['year'];
$categoria   = $descripcion ['categoria'];
  $descripcion   = $descripcion ['descripcion'];

echo "<br>";
//  echo $imagenes;
echo "<center>";
  echo "<img src = '$imagenes' width ='280' height = '280'";
  echo "<br>";
  echo "</br>";
  echo "<br>";
  echo "<label>";
  echo "Precio: ";echo "B/.";
  echo "</label>";

  echo $precio;
  echo "<br>";
  echo "<br>";
  echo "<label>";
  echo "Vendedor: ";
  echo $vendedor;
  echo "<br>";
  echo "<br>";
  echo "<label>";
  echo "Nombre del Producto: ";
  echo $nombre;
  echo "<br>";
  echo "<br>";
  echo "<label>";
  echo "Descripcion: ";
  echo $descripcion;
  echo "<br>";
  echo "<br>";
  echo "<label>";
  echo "Año: ";
  echo $years;
  echo "<br>";
  echo "<br>";
  echo "<label>";
  echo "Categoría: ";
echo $categoria;
  echo "<br>";
  echo "<br>";
  echo "<label>";
  echo "Modelo: ";
  echo $modelo;
  echo "<br>";
  echo "<br>";
  echo "<label>";
  echo "Marca: ";
  echo $marca;

  echo "<br>";
  echo "<br>";

echo "</center>";

}
echo "<center>";
echo '<a href="carritoCompra/catalogo.php">Comprar</a>';
//echo ' <input type="submit" name="name" value="comprar">';
echo "</center>";


 ?>


  <br>
   <br>
   <br>
   <br>
   <br>
   <br>
     <br>

 <div id="headder">
   <div>
   <p class="pull-left">&copy; <?php echo date('Y') ?>Copyright © 2016 TAU Corporation. All Rights Reserved.</p>
   </div>


</div>

</body>
</html>
