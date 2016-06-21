

<?php

function mostrarfecha()
{
date_default_timezone_set("America/Panama");

$dias = array("domingo" , "lunes", "martes", "miercoles", "jueves", "viernes", "sabado");
$meses = array ("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre");
echo $dias [date('w') ]. ","   ;
echo date ('d')   . "&nbsp";
echo "de"."&nbsp";
echo $meses [date('n') - 1].".";
}


 ?>
