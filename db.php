<?php


function conectar()
  {

  $link = mysql_connect("localhost","root","") or die ("no hay conexcion");
  $db = mysql_select_db("proyecto",$link) or die ("no existe la base de datos");

  }



 ?>
