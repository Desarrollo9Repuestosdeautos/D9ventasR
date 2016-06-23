<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>tienda de piezas</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/estilo.css" rel="stylesheet" type="text/css" />

</head>
<body>
<!-- main -->
<div id="main">
<!-- Left side bar -->
	<div id="LTsidebar">
		<div id="logo"></div>
<!-- Quick Search -->
			<div id="quicksearch">
				<div id="quickheadRT" class="boxheadRT"><h1>busqueda detallada</h1></div>
				<div class="boxheadLT"></div>
					<div class="boxmain">
						<div class="boxmainRT" style="width:144px">
							<p class="label">buscar por:</p>
							<input name="search" type="text" size="18" />
							<span style=" float:left;margin:10px 37px 0"><a href="#"><img src="img/btn_search.jpg" width="62" height="21" alt="" /></a></span>
							<p><a href="#" class="comlink"></a></p>
						</div>
					 	<div class="boxmainLT"></div>
					</div>
				<div class="boxbottRT"></div>
				<div id="quickbottLT" class="boxbottLT"></div>
			</div>
			<div class="clear"></div>
      <br>
      <br>
<!-- Categories --><div class="inner_copy"></div>
			<div id="categories">
				<div id="categorieheadRT" class="boxheadRT"><h1>buscar por Categories</h1></div>
		 		<div class="boxheadLT"></div>
					<div class="boxmain">
						<div class="boxmainRT" style="width: 144px;">
							<ul>
											<li><a href="#">marca</a></li>
											<li><a href="#">articulo</a></li>

									</ul>
								</div>
					 		<div class="boxmainLT"></div>
						</div>
						<div class="boxbottRT"></div>
						<div id="categoriebottLT" class="boxbottLT"></div>
				</div>
		</div>


<!-- Right sidebar -->
		<div id="RTsidebar">
			<div id="headder"><p class="label"> <?php include 'fechas.php';
	//echo mostrarfecha();
  echo "<p>".mostrarfecha()."</p>"; ?></p> </div>


			<div id="navbar">
				<ul>
					<li><a href="index.php">inicio</a></li><li><span></span></li>
					<li><a href="politicas.php">condiciones y uso</a></li><li><span></span></li>
					<li><a href="registro.php">registro</a></li><li><span></span></li>
					<li><a href="productos_insert.php" >Vender</a></li><li><span></span></li>
					<li><a href="login.html" class="divider">Login</a></li>
				</ul>

        <br>
        <br>
        <form action = "center">
        </div>


        </form>
				<div id="add">


				</div>
				<div class=" clear"></div>
        <br>
        <br>
		<fieldset>
			<legend>catalogo de articulos</legend>





        <?php
				// codigo php para generar catalogo de productos
        include 'PHPPaging.lib.php';
        include'db.php';
        echo  conectar();

				$pagina = new PHPPaging;

        //mostrar todo el catalogo
				$pagina -> agregarConsulta("SELECT * FROM inventario2 ");
				$pagina -> ejecutar();

      //  while ($inventario = mysql_fetch_array($select))
           while ($res = $pagina->fetchResultado())

					 //echo "<div id='products'>";
						//echo "<div id='pro'>";
        {
             $nombre = $res ['nombre_producto'];
             $imagen = $res ['imagen1'];
            $precio = $res ['precio'];
						$ID = $res ['ID'];


							echo "<div id='products'>";
              echo "<div id='pro'>";

             	echo "<h2>";
							echo $nombre;
							echo "</h2>";
							echo "<table>";
							echo "<tr>";
							echo "<hide>";
							echo "<td><img src = '$imagen' width ='160' height = '160'><td/>";

							echo "</table>";
							echo "<p>"; echo "$precio" . "$". "&nbsp"; "</p>";
							echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
							echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
							echo "<br>";

            	echo '<form class="" action="descripcion.php" method="post">';
							echo "<input type= 'hidden' name='ID' value='$ID'>";
							echo ' <input type="submit" name="name" value="detalle" ';
							echo "</hide>";
							echo "</div>";

               echo "</div>";
							 	echo "</form>";
            	echo "<div id='bigdivider'>";  echo "</div>";



              }


            ?>







		</fieldset>
		<br>
     <center>
    <?php  	 echo $pagina->fetchNavegacion();  ?>

	</center>


    <br>
    <br>
    <br>
    <br>
     <br>
      <br>
      <br>
      <br>
      <br>
      <br>
        <br>

		<div id="headder">
      <div>
      <p class="pull-left">&copy; <?php echo date('Y') ?> - derechos reservados.</p>
      </div>


</div>

</body>
</html>
