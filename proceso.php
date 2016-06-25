<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<head>
	<title>autenticacion</title>
	<meta charset="utf-8">
</head>
</head>
<body>
		<?php
			include 'db.php';
      echo conectar();
			//if(isset($_POST['login'])){
				$usuario = $_POST['nombre'];
				$contraseña=md5($_POST["contraseña"]);
        $log = mysql_query("SELECT * FROM registro_usuario WHERE nombres='$usuario' AND pass='$contraseña'")or die(mysql_error());
				if (mysql_num_rows($log)>0) {
					$row = mysql_fetch_array($log);
					$_SESSION["usuario"] = $row['nombres'];
				  	echo 'Iniciando sesión para '.$_SESSION['usuario'].' <p>';
					echo '<script> window.location="index2.php"; </script>';
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="login2.php"; </script>';
				}
			//}
		?>
</body>
</html>
