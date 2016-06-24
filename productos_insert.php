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

		<h1>Marca  (del carro): <input name="marca" type="text" style="font-size:12px" class="text" value="" size="40" /></h1>

<br>
		<h1>Nombre de la Pieza:<input name="producto" type="text" style="font-size:12px" class="text" value="" size="40" /></h1>

<br>
				<h1 >Seleccionar Imagen:</h1><input type="file" name="fichero" style="font-size:14px" class="text"/>
</br>
<br>
		<h1>Descripcion de la Pieza:	</h1><textarea cols="40" style="font-size:12px" rows="2" name="descripcion" type="text" class="text"></textarea>
<br/>
<br>
			<h1>Número de Envioxsccs: <input name="envio" type="text" style="font-size:12px" class="text" value="" size="26" /></h1>
<br>
<br/>
<h1>Categotía:</h1>
<select class="text">
    <option value="0">Cigüeñal</option>
    <option value="1">Acelerador</option>
    <option value="2">Batería de automóvil</option>
		<option value="3">Bocina</option>
		<option value="4">Bujía</option>
		<option value="5">Embrague</option>
		<option value="6">Parachoques</option>
</select><br/>
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
