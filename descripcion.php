
<?php
//se inicia sesion
session_start();

//se pregunta por la session
if(isset($_SESSION['usuario'])) {?>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>descripción</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/estilo.css" rel="stylesheet" type="text/css" />
  </head>
    <div id="logos"></div>
  <body bgcolor="#DDE3FA">



    <?php

    include 'db.php' ;
    echo conectar();
    $ID = $_POST ['ID'];
    //se traen todos los datos de la base de datos dependiendo del id enviado por el form
    $select = mysql_query("SELECT * FROM  inventario2, categoria where inventario2.ID = '$ID' AND inventario2.categoria = categoria.id");
    while ($descripcion = mysql_fetch_array($select))

    {

      $imagenes = $descripcion ['imagen1'];
      $precio   = $descripcion ['precio'];
      $modelo   = $descripcion ['modelo'];
      $marca   = $descripcion ['marca'];
      $vendedor   = $descripcion ['vendedor1'];
      $nombre   = $descripcion ['nombre_producto'];
      $years   = $descripcion ['year'];
      $categoria   = $descripcion ['categoria'];
      $descripcion   = $descripcion ['descripcion'];


      //se muestran los datos
      echo "<center>";
      echo "<img src = '$imagenes' width ='280' height = '280'";
      echo "<br>";
      echo "</br>";
      echo "<br>";
      echo '<form class="" action="catalogo.php" method="post" ALIGN="center">';
      echo "<input type= 'hidden' name='ID' value='$ID'>";
      echo ' <input style="background-color: #FF9900" type="submit" name="name" value="Mostrar Detalles Para Comprar">';
      echo "<br>";
      echo "</br>";

      echo "<label style='color:green;'>";
      echo "Precio: ";echo "B/.";
      echo "</label>";


      echo $precio;
      echo "<br>";

      echo "<label style='color:#1D8E1B;'>";
      echo "Vendedor: ";
      echo "</label>";
      echo $vendedor;
      echo "<br>";

      echo "<label style='color:#1702FC;'>";
      echo "Nombre del Producto: ";
      echo "</label>";
      echo $nombre;
      echo "<br>";

      echo "<label style='color:#1702FC;'>";
      echo "Descripcion: ";
      echo "</label>";
      echo $descripcion;
      echo "<br>";

      echo "<label style='color:red;'>";
      echo "Año: ";
      echo "</label>";
      echo $years;
      echo "<br>";

      echo "<label style='color:#1702FC;'>";
      echo "Categoría: ";
      echo "</label>";
      echo $categoria;
      echo "<br>";

      echo "<label style='color:#1702FC;'>";
      echo "Modelo: ";
      echo "</label>";
      echo $modelo;
      echo "<br>";

      echo "<label style='color:#1702FC;'>";
      echo "Marca: ";
      echo "</label>";
      echo $marca;

      echo "</center>";

      echo '<a href="index.php"><img src="images/continu.jpg" width="160" height="35" border="0" id="categoriebottLT"></a>';
    }


    ?>


    <br>
    <br>
    <br>

    <div id="headder" >
      <div>
        <p align="center" class="pull-left">&copy; <?php echo date('Y') ?>Copyright © 2016 TAU Corporation. All Rights Reserved.</p>
      </div>


    </div>

  </body>
  </html>

  <?php
}else{
    //parte negativa sino hay usurio debe logearse
  echo '<script> alert("para realizar esta acccion debe registrarse en el sistema.");</script>';
  echo '<script> window.location="login2.php"; </script>';
}
?>
