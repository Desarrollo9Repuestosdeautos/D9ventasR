<?php
session_start();
error_reporting(0);//letst
$carro = $_SESSION['carro'];
?>
<html>
<head>
  <title>PRODUCTOS AGREGADOS AL CARRITO</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <!-- css para la página-->
  <style type="text/css">
  <!--
  .tit {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: 20px;
    color: #FFFFFF;
  }
  .prod {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: 20px;
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
  <h1 align="center">Carrito</h1>
  <?php
  if ($carro) {
    ?>
    <!-- tabla para mostrar lo que esta dentro del carrito -->
    <table width="720" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr bgcolor="#333333" class="tit">
        <td width="105">Producto</td>
        <td width="207">Precio</td>
        <td colspan="2" align="center">Cantidad de Unidades</td>
        <td width="100" align="center">Borrar</td>
        <td width="159" align="center">Actualizar Cantidad</td>
      </tr>
      <?php
      $color = array("#ffffff", "#F0F0F0");
      $contador = 0;
      $suma = 0;
      //funcion sumar la cantidad que es igual a cantidad por precio
      foreach ($carro as $k => $v) {
        $subto = $v['cantidad'] * $v['precio'];
        $suma = $suma + $subto;
        $contador++;
        ?>
        <!-- form que envia los datos con el método post-->
        <form name="a<?php echo $v['identificador'] ?>" method="post" enctype="application/x-www-form-urlencoded" action="agregacar.php?<?php echo SID ?>" id="a<?php echo $v['identificador'] ?> ">
          <?php
          ?>
          <tr bgcolor="<?php echo $color[$contador % 2]; ?>" class='prod'>
            <td><?php echo $v['producto'] ?></td>
            <td><?php echo $v['precio'] ?></td>
            <td width="43" align="center"><?php echo $v['cantidad'] ?></td>
            <td width="136" align="center">
              <!-- campo de entrada para poner cantidad-->
              <input name="cantidad" type="text" id="cantidad" value="<?php echo $v['cantidad'] ?>" size="8">
                <!-- boton con imagen para borrar-->
              <input name="id" type="hidden" id="id" value="<?php echo $v['ID'] ?>"> </td>
              <td align="center"><a href="borracar.php?<?php echo SID ?>&id=<?php echo $v['ID'] ?>"><img src="images/trash.gif" width="17" height="20" border="0"></a></td>
              <td align="center">
                  <!-- boton con imagen para actualizar la cantidad ingresada-->
                <input name="imageField" type="image" src="images/actualizar.gif" width="20" height="20" border="0"></td>
                  <!--form con la informacion de los articulos cantidad y precios totales-->
              </tr></form>
              <?php } ?>
            </table>
            <div align="center"><span class="prod">Total de Artículos: <?php echo count($carro); ?></span>
            </div><br>
            <div align="center"><span class="prod">Total: $<?php echo ($suma); ?></span></div>
            <br>
            <div align="center"><span class="prod"></span>
              <a href="index.php?<?php echo SID; ?>"><br><img src="images/continu.jpg" width="50" height="15" border="0" align="absmiddle"></a>
              <a href="regpago.php?<?php echo SID ?>&costo=<?php echo base64_encode($suma) ?>"><img src="images/finalizarcompra.gif" width="135" height="17" border="0" align="absmiddle" enctype="application/x-www-form-urlencoded"></a>

            </div>
              <!-- parte negativa que muestra el carro vacio-->
            <?php } else { ?>
              <p align="center"> <span class="prod">No hay productos seleccionados</span> <a href="index.php?<?php echo SID; ?>"><img src="images/continu.jpg" width="80" height="20" border="1"></a>
                <br>
              </br>
              <br>
            </br>
            <img src="images/carrito-vacio.jpg" width="386" height="263" border="0"></a></td>
            <?php } ?>
          </p>
        </body>
        </html>
