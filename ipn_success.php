

<!DOCTYPE html>
<html>
  <head>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/estilo.css" rel="stylesheet" type="text/css" />
    <meta charset="utf-8">
    <title>Gracias por su compra</title>
  </head>

  <body>


  </body>
</html>

<?php
echo "*** Gracias Por Su Compra ***";
//print_r($_POST)
    session_start();

    $titulo = "Carrito de Compra con Php y Mysql";
    include("conecta.php");
    include("meta_tags.php");
    include("cabecera.php");


    <div id="derecha">
        <div class='text-border'>
            <h1>Compra realizada con éxito, por favor revisa su correo para ver la notificación.</h1>
            <?php
                //1. recogemos los valores del cliente y de la compra.
                //2. llamamos a una función para enviar el mail con la factura al cliente.

        </div>
    </div>

include("pie.php");
include("cerrar_etiquetas.php");


?>
