<?php
session_start();
$carro = $_SESSION['carro'];
?>
<html>
    <head>
        <title>PRODUCTOS AGREGADOS AL CARRITO</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
            <table width="720" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr bgcolor="#333333" class="tit">
                    <td width="105">Producto</td>
                    <td width="207">Precio</td>
                    <td colspan="2" align="center">Cantidad de Unidades</td>
                    <td width="100" align="center">Borrar</td>
                    <td width="159" align="center">Actualizar</td>
                </tr>
                <?php
                $color = array("#ffffff", "#F0F0F0");
                $contador = 0;
                $suma = 0;
                foreach ($carro as $k => $v) {
                    $subto = $v['cantidad'] * $v['precio'];
                    $suma = $suma + $subto;
                    $contador++;
                    ?>
                    <form name="a<?php echo $v['identificador'] ?>" method="post" action="agregacar.php?<?php echo SID ?>" id="a<?php echo $v['identificador'] ?>">
                        <tr bgcolor="<?php echo $color[$contador % 2]; ?>" class='prod'>
                            <td><?php echo $v['producto'] ?></td>
                            <td><?php echo $v['precio'] ?></td>
                            <td width="43" align="center"><?php echo $v['cantidad'] ?></td>
                            <td width="136" align="center">
                                <input name="cantidad" type="text" id="cantidad" value="<?php echo $v['cantidad'] ?>" size="8">
                                <input name="id" type="hidden" id="id" value="<?php echo $v['id'] ?>"> </td>
                            <td align="center"><a href="borracar.php?<?php echo SID ?>&id=<?php echo $v['id'] ?>"><img src="images/trash.gif" width="12" height="14" border="0"></a></td>
                            <td align="center">
                                <input name="imageField" type="image" src="images/actualizar.gif" width="20" height="20" border="0"></td>
                        </tr></form>
                <?php } ?>
            </table>
            <div align="center"><span class="prod">Total de Artículos: <?php echo count($carro); ?></span>
            </div><br>
            <div align="center"><span class="prod">Total: $<?php echo number_format($suma, 2); ?></span></div>
            <br>
            <div align="center"><span class="prod">Continuar la selección de productos</span>
                <a href="catalogo.php?<?php echo SID; ?>"><img src="images/continuar.gif" width="15" height="15" border="0" align="absmiddle"></a>
                <a href="regpago.php?<?php echo SID; ?>&costo=<?php echo $suma; ?>"><img src="images/finalizarcompra.gif" width="135" height="16" border="0" align="absmiddle"></a>
            </div>
        <?php } else { ?>
            <p align="center"> <span class="prod">No hay productos seleccionados</span> <a href="catalogo.php?<?php echo SID; ?>"><img src="images/continuar.gif" width="13" height="13" border="0"></a>
                <?php } ?>
        </p>
    </body>
</html> 