<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<link rel="stylesheet" href="../D9ventasR/_assets/css/themes/default/jquery.mobile-1.4.5.min.css">
	<!--	<link rel="stylesheet" href="../D9ventasR/_assets/_assets/css/jqm-demos.css">
		<link rel="shortcut icon" href="../D9ventasR/_assets/favicon.ico"> -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
		<script src="../D9ventasR/_assets/js/jquery.js"></script>
		<script src="../D9ventasR/_assets/_assets/js/index.js"></script>
		<script src="../D9ventasR/_assets/js/jquery.mobile-1.4.5.min.js"></script> -->


		<title>registro de productos </title>
	</head>
	<body>
		<form data-role="controlgroup" action="insertar.php" method="post" style=" float:left;margin: -10px 500px 0px">
		<div data-role="navbar">
    <ul>
        <li><a class="ui-btn-active">Formulario de Venta</a></li>
    </ul>
</div>


		<p class="label3">Precio: <input name="precio" type="text"  value="" size="26" /></p>

			<p class="label3">Vendedor: <input name="vendedor" type="text"  value="" size="26" /></p>

				<p class="label3">Nombre del producto: <input name="producto" type="text"  value="" size="26" /></p>


				<label>imagen:</label>	<input type="file" name="fichero" value="">

			<p class="label3">Descripcion: <input name="descripcion" type="text"  value="" size="26" /></p>


			<p class="label3">Envio: <input name="envio" type="text"  value="" size="26" /></p>

					<input type="submit" name="" value="guardar">



		</form>

	</body>
</html>
