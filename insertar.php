<?php

include 'db.php';
echo conectar();

$precio = $_POST ['precio'];
$vendedor = $_POST ['vendedor'];
$codigo = $_POST ['codigo'];
$producto = $_POST ['producto'];
$ruta="imagenes";//ruta carpeta donde queremos copiar las imágenes
$archivo=$_FILES['fichero']['tmp_name'];
$nombre=$ruta.$_FILES['fichero']['name'];
move_uploaded_file($archivo,$ruta."/".$nombre);
$ruta = $ruta ."/". $nombre;
$descripcion = $_POST ['descripcion'];
$envio = $_POST ['envio'];

$insert = mysql_query("INSERT INTO inventario2 VALUES ('',".$precio.", '".$vendedor."' , '".$codigo."', '".$producto."' , '".$ruta."', '".$descripcion."', ".$envio.")");

if ($insert) {
  echo "los datos se han almacenado en la base de datos";
}

else
{
  echo"no inserto";
}

?>

<br>
<a href="index.php">ver la imagen</a>
