<?php
session_start();

extract($_REQUEST);

mysql_connect("localhost","root","");
mysql_select_db("proyecto");

if(!isset($cantidad)){$cantidad=1;}

$qry=mysql_query("select * from inventario2 where
ID='".$id."'");
$row=mysql_fetch_array($qry);

if(isset($_SESSION['carro']))
$carro=$_SESSION['carro'];

$carro[md5($id)]=array('identificador'=>md5($id),
'cantidad'=>$cantidad,'producto'=>$row['nombre_producto'],
'precio'=>$row['precio'],'ID'=>$id);

$_SESSION['carro']=$carro;

header("Location:catalogo.php?".SID);
?>
