<!DOCTYPE html PUBLIC>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<title>Resgistro</title>

</head>
<body bgcolor="EAE1B7">

				<br>
				<br>
				<br>
				<br>

        <form action="registro_usuario.php" method="post" style=" float:left;margin:-110px 500px 0px" data-role="controlgroup">

						<div data-role="navbar">
    <ul>
        <h4>Formulario de Subscripción</h4>


    </ul>
</div>

					<h1>Nombre: </h1><input name="usuario" type="text" style="font-size:14px" class="text" />
					<br>
					</br>
							<h1>Apellido:</h1><input name="apellido" type="text" style="font-size:14px" class="text" />
							<br>
							</br>
							<h1>Dirección: </h1><input name="direccion" type="text" style="font-size:14px" class="text" />
							<br>
							</br>
						<h1>contraseña: </h1><input name="contraseña" type="password" style="font-size:14px" class="text" />
						<br>
						</br>
	           <h1>Cédula: </h1><input name="cedula" type="text" style="font-size:14px" class="text" />
						 <br>
						 </br>
						<h1>E-mail: </h1><input name="postal" type="text" style="font-size:14px" class="text" />
						<br>
						</br>
					<h1>Número de cuenta:</h1> <input name="cuenta" type="text" style="font-size:12px" class="text" size="26"/>
					<br>
					</br>
					<br>
					</br>
						<input type="submit" value="Guardar" id="boton" style="margin:10px 40px 0"/>

						<br>
						</br>
						<br>
						</br>
						<br>
						</br>

  </form>
		<div id="headder" >
      <div>
      <p id="" style=" float:left;margin:5px 500px 0">&copy; <?php echo date('Y') ?> - derechos reservados.</p>
      </div>


</div>
	</div>
</div>

</body>
</html>
