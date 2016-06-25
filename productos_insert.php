
<?php
session_start();
include 'db.php';
echo conectar();

if(isset($_SESSION['usuario'])) {?>




<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="css/estilo.css" rel="stylesheet" type="text/css" />

		<title>registro de productos </title>
	</head>
	<body bgcolor="#D3F7AF">
		<form class="navbar" action="insertar.php" method="post" style=" float:left;margin: -10px 500px 0px" enctype="multipart/form-data">

    <ul>
        <h3 >Formulario de Venta</h3>
    </ul>


	<table border="1" align"center" id="table">
		<h1>Precio:</h1><input name="precio" type="text" style="font-size:12px" value="" class="text" size="15" />
<br>
</br>
			<h1>Vendedor: <input name="vendedor" type="text" style="font-size:12px" class="text" value="" size="35" /></h1>
			<br>
					<h1>Nombre de la Pieza:<input name="producto" type="text" style="font-size:12px" class="text" value="" size="40" /></h1>

					<br>
									<h1 >Seleccionar Imagen:</h1><input type="file" name="fichero" style="font-size:14px" class="text"/>
					</br>
					<br>
							<h1>Descripcion de la Pieza:	</h1><textarea name="descripcion" cols="40" style="font-size:12px" rows="2"  type="text" class="text"></textarea>
					<br/>

					<br/>
					<h1>Categotía:</h1>
					<select name="categoria" class="text" >
							<option value="1">Compatible con la inspeccion de automoviles</option>
							<option value="2">T/M×Tren de engranajes</option>
							<option value="3">Repuestos con referencia de Direccion</option>
							<option value="4">Acondicionador de aire y calefaccion</option>
							<option value="5">Accesorio interior</option>
							<option value="6">Extremo delantero</option>
							<option value="7">Parte trasera final</option>
							<option value="8">Repuestos con referencia de Motor</option>
							<option value="9">Repuestos con referencia de Suspension</option>
							<option value="10">Repuestos con referencia de Frenos</option>
							<option value="11">Audio</option>
							<option value="12">Componente electrico</option>
							<option value="13">Audio</option>
							<option value="14">Parte lateral</option>
							<option value="15">Parte de vidrio</option>
					</select><br/>

					<br>
					<h1>Año:<input name="year" type="text" style="font-size:12px" class="text" value="" size="40" /></h1>

			<br>
							<h1>Modelo:<input name="modelo" type="text" style="font-size:12px" class="text" value="" size="40" /></h1>

					<br>

		<h1>Marca: <input name="marca" type="text" style="font-size:12px" class="text" value="" size="40" /></h1>

		<br>




<input type="submit" id="boton" name="" value="guardar">
</table>
</form>
<div id="headder">
	<div>
	<p id="" style=" float:left;margin:1px 500px 0" >&copy; <?php echo date('Y') ?> - derechos reservados.</p>
	</div>
</div>
	</body>
</html>


<?php
}else{
	echo '<script> alert("para realizar esta acccion debe registrarse en el sistema.");</script>';
	echo '<script> window.location="registro.php"; </script>';
}
?>
