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
			<legend>catalogo de articulos</legend><div id="products">
				<div id="pro"><h2>retrovisor</h2><img src="img/retrovisor.jpg" width="160" height="134" alt="" /><p>$199</p><a href="#" id="buyit"></a></div><div id="bigdivider"></div>
        	<div id="pro"><h2>retrovisor</h2><img src="img/retrovisor.jpg" width="160" height="134" alt="" /><p>$199</p><a href="#" id="buyit"></a></div><div id="bigdivider"></div>
            	<div id="pro"><h2>Mofle</h2><img src="img/mofle1.jpg" width="160" height="134" alt="" /><p>$199</p><a href="#" id="buyit"></a></div><div id="bigdivider"></div>
              <div id="pro"><h2>Mofle</h2><img src="img/trasmision.jpg" width="160" height="134" alt="" /><p>$199</p><input type="button" name="name" value="detalle"></a></div><div id="bigdivider"></div>



			</div>
		</fieldset>
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
	</div>
</div>
</body>
</html>
