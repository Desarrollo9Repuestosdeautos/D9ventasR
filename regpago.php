<?php
session_start();

$carro = $_SESSION['carro'];

$products = '';
$products2 = '';
foreach ($carro as $k => $v) {
    $unidad = $v['cantidad'] > 1 ? " unidades de " : " unidad de ";
    $products.=$v['cantidad'] . $unidad . $v['producto'] . "+";
    $products2.=$v['cantidad'] . $unidad . $v['producto'] . ", ";
}

$products = substr($products, 0, (strlen($products) - 1));

$products2 = substr($products2, 0, (strlen($products2) - 2));
?>
<html>
    <head>
        <title>Finalizar Compra</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <style type="text/css">
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
        </style>
    </head>

    <body>

        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" name="f1" id="f1" method="post">
            <fieldset>
                <legend class="prod">
                    <strong>Finalizar la Compra</strong>
                </legend>

                <input type="hidden" name="shipping" value="0">

                <input type="hidden" name="cbt" value="Presione aqui para volver a www.nuestrositio.com >>">
                <input type="hidden" name="cmd" value="_xclick">

                <input type="hidden" name="rm" value="2">
                <input type="hidden" name="bn" value="lol">

                <input type="hidden" name="business" value="eucm4@hotmail.com">

                <input type="hidden" name="item_name" value="<?php echo $products2; ?>">
                <input type="hidden" name="item_number" value="Nombre del comprador">

                <input type="hidden" name="amount" value="<?php echo number_format($_GET['costo'], 2) ?>">

                <input type="hidden" name="custom" value="<?php echo $_GET['costo'] ?>">

                <input type="hidden" name="currency_code" value="USD">

                <input type="hidden" name="image_url" value="">

                <input type="hidden" name="return" value="http://localhost:8080/D9ventasR/ipn_success.php">

                <input type="hidden" name="cancel_return" value="http://localhost:8080/dashboard/ipn_error.php">

                <input type="hidden" name="no_shipping" value="0">
                <input type="hidden" name="no_note" value="0">
              +
                <table width="60%" border="0" align="center" cellpadding="6" cellspacing="0" bgcolor="#EABB5D" style=" border-color:#000000; border-style:solid;border-width:3px;">
                    <tr>
                        <td align="left" valign="top"><span class="prod"><strong>Detalle de los Productos Seleccionados</strong>:</span><br>
                            <span class="texto1negro"> </span><span class="prod"><strong>Productos: </strong><?php echo $products; ?><br>
                                <strong>Pecio Total:</strong> $<?php echo number_format($_GET['costo'], 2) ?> </span></td>
                    </tr>
                </table>
                <input type="submit" name="Submit" value="Enviar">
            </fieldset>
        </form>
    </body>
</html>
