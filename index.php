

			<?php // AUTHOR: webreunidos.es  // Primero definimos la conexión a la base de datos
			error_reporting(0);
			// Definimos la conexión
			include'db.php';
			echo  conectar();
			$sql = "SELECT * FROM inventario2";
					$texto = ''; //Variable que contendrá el resultado de la búsqueda
					$registros = ''; //Variable que contendrá el número de resgistros encontrados
					if($_POST){  $busqueda = trim($_POST['buscar']);
						 $entero = 0;  if (empty($busqueda)){ $texto = 'Búsqueda sin resultados'; }
						 else{ // Si hay información para buscar, abrimos la conexión
							 conectar(); mysql_set_charset('utf8'); // para indicar a la bbdd que vamos a mostrar la info en utf
							 //Contulta para la base de datos, se utiliza un comparador LIKE para acceder a todo lo que contenga la cadena a buscar
							 $sql = "SELECT * FROM inventario2 WHERE nombre_producto LIKE '%" .$busqueda. "%' ORDER BY ID";
								 $resultado = mysql_query($sql);
							 //Ejecución de la consulta //Si hay resultados...
							 if (mysql_num_rows($resultado) > 0){  // Se recoge el número de resultados
								 $registros = '<p>' . mysql_num_rows($resultado) . ' registros encontrados</p>';
									// Se almacenan las cadenas de resultado
									while($fila = mysql_fetch_assoc($resultado)){  $texto .= $fila['null'] . '<br />'; }
								}else{ $texto = "NO HAY RESULTADOS EN LA BBDD";	 } }}
								 // Después de trabajar con la bbdd, cerramos la conexión (por seguridad, no hay que dejar conexiones abiertas)
			mysql_close($conexion);


															 // Se muestran los resultados de la consulta, número de registros y contenido.
															 //echo $registros;
															 echo $texto; ?>

															 <!DOCTYPE html PUBLIC>
															 <html >
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
															 				<div id="quickheadRT" class="boxheadRT"><h1>Búsqueda detallada</h1></div>
															 				<div class="boxheadLT"></div>
															 					<div class="boxmain">
															 						<div class="boxmainRT" style="width:144px">
															 							<br>
															 							<form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
															 							<input  id="buscar" name="buscar" type="search" placeholder="Buscar aquí..." autofocus >
															 						</br>
																					<br>
																					<?php echo $registros ?>
															 						<br>
															 							<input type="submit" name="buscador" class="boton peque aceptar" value="buscar">


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

											<?php  			// codigo php para generar catalogo de productos
														 include 'PHPPaging.lib.php';


														$pagina = new PHPPaging;

														 //mostrar todo el catalogo

														$pagina -> agregarConsulta($sql);
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
							echo "<tr>";
							echo "<tr>";
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
