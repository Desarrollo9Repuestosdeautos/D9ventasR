<?php
session_start();
$carro=$_SESSION['carro'];
//Guardamos en la
//variable $html el
//cuerpo del mensaje
$html = "
<html>
<head>
<title>Detalle de artículos Comprados</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">
<style type=\"text/css\">
<!--
.tit {
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 9px;
color: #FFFFFF;
}
.prod {
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 9px;
color: #333333;
}
h1 {
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 20px;
color: #990000;
}
-->
</style>
</head>
<body>
<table width=\"414\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
<tr bgcolor=\"#333333\" class=\"tit\">
<td width=\"198\">Producto</td>
<td width=\"107\">Precio</td>
<td width=\"109\" align=\"center\">Cantidad de Unidades</td>
</tr>";
$color=array("#ffffff","#F0F0F0");
$contador=0;
$suma=0;
foreach($carro as $k => $v){
$contador++;
$subto=$v['cantidad']*$v['precio'];
$suma=$suma+$subto;
$html.="<tr bgcolor=\"".$color[$contador%2]."\" class=\"prod\">
<td>".$v['producto']."</td>
<td>".$v['precio']."</td>
<td align=\"center\">".$v['cantidad']."</td>
</tr>";
}
$html .=
"</table>
<div align=\"center\"><span class=\"prod\">Total de Artículos: ".count($carro)."</span> </div><br>
<div align=\"center\"><span class=\"prod\">Total: \$".number_format($suma,2)."</span></div><br>
<div align=\"left\"><span class=\"prod\">
Aquí escribiremos un mensaje cualquiera, por ejemplo, cuáles son nuestras opciones de pago
</span></div>";
//Como queremos enviar el
//mensaje en formato html,
//colocamos las 2 cabeceras
//que nos permitirán hacerlo
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset= iso-8859-1\r\n";
//Las siguientes 2 cabeceras,
//permitirán que el destinatario
//sepa a quién responder y
//quién le ha enviado el
//mensaje
$headers .= "Reply-To: mailremitente@dominio.com\r\n";
$headers .= "From: Nombre del Remitente<mailremitente@dominio.com>\r\n";
//En este ejemplo suponemos
//que el mail del destinatario
//lo hemos enviado desde un
//formulario con el método post,
//pero es indistinto desde donde
//se lo obtenga (consulta a la
//base de datos, almacenado en
//una variable de sesión,
//enviado por get,etc.)
mail("{$_POST['email']}","Detalle de su compra en nuestro website",$html,$headers);
?> 