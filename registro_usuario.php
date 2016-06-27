<?php
//archivo que hace la accion o query para registrar los uauario a la base de datos
include 'db.php';
echo conectar();

$nombre = $_POST ['usuario'];
$apellido = $_POST ['apellido'];
$direccion = $_POST ['direccion'];
$contraseña =  $_POST ['contraseña'];
$cedula = $_POST ['cedula'];
$correo = $_POST ['postal'];
$cuenta = $_POST ['cuenta'];




$insert = mysql_query("INSERT INTO registro_usuario VALUES ('','".$nombre."', '".$apellido."' , '".$direccion."', md5('".$contraseña."') , '".$cedula."', '".$correo."', ".$cuenta.")");

if ($insert) {
  echo "*** Gracias Por Subscribirte ***";
  echo "<br>";

}

else
{
  echo"no inserto";
}

?>

<br>
 <a href="index2.php">ver catalogo</a>
