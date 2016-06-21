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
					<li><a href="clientes.php" class="divider">Clientes</a></li>
				</ul>

        <br>
        <br>
        <form action = "">
        </div>
        <div id="login">
          <div id="loginheadRT" class="boxheadRT"><h1>Login</h1></div>
          <div class="boxheadLT"></div>
          <div class="boxmain">
            <div class="boxmainRT" style="width:216px;">
                <p class="label">usuario: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="usuario" type="text" size="19" /></p>
                <p class="label">contraseña:&nbsp;<input name="search" type="password" size="19" /></p>
                <span style=" float: left; margin: 10px 90px 0px;"><a href="n.html"><img src="img/login_btn.jpg" width="60" height="25" alt="" /></a></span>
              </div>
                <div class="boxmainLT"></div>
              </div>
              <div class="boxbottRT"></div>
              <div id="loginbottLT" class="boxbottLT"></div>
          </div>


        </form>
				<div id="add">
					<div id="addheadRT" class="boxheadRT"><h1>Sistema de venta.</h1></div>
		 		<div class="boxheadLT"></div>
						<div class="boxmain">
							<div class="boxmainRT" style="width: 243px;">
					 			<p class="label">vision:</p>
								<p class="label2">brindar a usuarios,herramientas tecnologicas que puedan ayudar a comerzializar articulos de automoviles de segunda mano de una manera rapida y sencilla </p>
							</div>
					 		<div class="boxmainLT"></div>
						</div>
						<div class="boxbottRT"></div>
						<div id="addbottLT" class="boxbottLT"></div>
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

        //$select = mysql_query("SELECT * FROM  inventario2");
				$pagina -> agregarConsulta("SELECT * FROM inventario2");
				$pagina -> ejecutar();

      //  while ($inventario = mysql_fetch_array($select))
           while ($res = $pagina->fetchResultado())

					 //echo "<div id='products'>";
						//echo "<div id='pro'>";
        {
             $nombre = $res ['nombre_producto'];
             $imagen = $res ['imagen1'];
            $precio = $res ['precio'];
						$codigo = $res ['codigo'];
          ?>



        <?php 	echo "<div id='products'>"; ?><?php echo "<div id='pro'>"; ?>  <?php 	echo '<form class="" action="descripcion.php" method="post">'; ?>   <?php echo "<h2>"; ?><?php echo $nombre; ?><?php echo "</h2>"; ?><?php echo "<img src = '$imagen' width ='160' height = '134'"; ?><?php echo "<p>"; ?>
            <?php echo $precio; ?><?php echo "</p>"; ?><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; ?><?php echo "<br>"; ?><?php echo "&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; ?>
                            <?php echo "   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; ?><?php 	echo ' <input type="submit" name="name" value="detalle" '; ?><?php 		echo "</form>"; ?><?php echo "</div>"; ?><?php echo "<div id='bigdivider'>"; ?>
                             <?php echo " </div>"; ?>

                               <?php echo "<br>"; ?>
                               <?php echo "<br>"; ?>
                               <?php echo "</div>"; ?>










      <?php } ?>







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
