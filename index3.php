<?php
//inicia la sesion
session_start();
?>

<?php

// incluimos la conexion a la base de datos
include'db.php';
echo  conectar();
//seleccionamos todos los datos de la tabla inventario2
$sql = "SELECT * FROM inventario2";
?>
<!DOCTYPE html PUBLIC>
<html >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Tienda de piezas</title>
	<head>
		<!-- llamamos los css y java script-->
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="http://www.jqueryscript.net/demo/DataTables-Jquery-Table-Plugin/media/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="DataTables/datatables.js"></script>
	<script type="text/javascript" src="http://www.jqueryscript.net/demo/DataTables-Jquery-Table-Plugin/media/js/jquery.js"></script>
			<script type="text/javascript" src="http://www.jqueryscript.net/demo/DataTables-Jquery-Table-Plugin/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="http://www.jqueryscript.net/demo/DataTables-Jquery-Table-Plugin/media/css/jquery.dataTables.css"></script>

	</head>
	<body bgcolor="#C0E4EB">
		<!-- main -->
		<div id="main">
			<!-- Right sidebar -->
			<div id="RTsidebar"><script src="http://h2.flashvortex.com/display.php?id=2_1467404651_48452_442_0_728_90_9_2_39" type="text/javascript"></script><div id="logo"></div>
			<div id="headder" align="right"><p class="label"> <?php include 'fechas.php';
			// mostrarfecha
			echo "<p>".mostrarfecha()."</p>"; ?></p> </div>


			<div id="navbar">
				<ul>
					<li><a href="index.php">Home</a></li><li><span></span></li>
					<li><a href="#">About</a></li><li><span></span></li>
					<li><a href="registro.php">Sign in</a></li><li><span></span></li>
					<li><a href="productos_insert.php" >Sale</a></li><li><span></span></li>
					<li><a href="login2.php">Login</a></li><li><span></span></span></li>
					<li><a href="vercarrito.php?" class="divider">View Cart</a></span></li>


				</ul>

			</div>

			<!-- muesra la sesion del usuario con el nombre y la opcion salir -->
			<?php echo "<p ALIGN = right style='color:blue;'>";
			echo "<br>";
			if(isset($_SESSION['usuario']))
			{
				echo "User:". $_SESSION ['usuario'] ;
				echo "<br>";
				echo '<input name="imageField" type="image" src="images/user.png"  width="30" height="30" border="0">';
				echo "<br>";
				echo "<p ALIGN = right  style='color:blue;'>";
				echo "<a style='color:Red;' href='logout.php'>Exit</a>";
			}
			?>
			<?php echo "</p>"; ?>

			<legend>Catalogue of Articles</legend>
			<?php
			// codigo php para generar catalogo de productos
			include 'PHPPaging.lib.php';
			$pagina = new PHPPaging;
			//agreda los datos al paginador
			$pagina -> agregarConsulta($sql);
			$pagina -> ejecutar();

			echo "<table  id='productos' class = 'display' cellspacing = '0' width = '100%''>";

			echo "<thead>";

			echo "</br>";
			echo "<td style='color:#A8C444;'>#</td>
			<td style='color:#9E2323;'>Year</td>
			<td style='color:#AE7126;'>Marca</td>
			<td style='color:#03B521;'>Nombre</td>
			<td></td>
			<td style='color:#1702FC;'>Precio</td>
			<th></th></thead>
			<tfoot>
				<tr>
						<th></th>
						<th>Year</th>
						<th>Marca</th>
						<th></th>
						<th></th>
						<th>Precio</th>
				</tr>
		</tfoot>";
		echo "<body>";
			echo "<br/>";
			//  while para el paginador
			while ($res = $pagina->fetchResultado())
			{
				$id = $res ['ID'];
				$year = $res ['year'];
				$marca = $res ['marca'];
				$nombre = $res ['nombre_producto'];
				$imagen = $res ['imagen1'];
				$precio = $res ['precio'];
				$ID = $res ['ID'];
				//muestra los datos en la tabla
				echo "<tr>";
				echo "<td style='color:#A8C444;'>$id</td>";
				echo "<td style='color:#9E2323;'>$year</td>";
				echo "<td style='color:#AE7126;'>$marca</td>";
				echo "<td style='color:#03B521;'>$nombre</td>";
				echo "<td><img src = '$imagen' id='productos' width ='60' height = '60'></td>";
				echo "<td style='color:#1702FC;'>B/.$precio</td>";
				echo "<td><form action='descripcion.php' method='post'>";
				echo "<input type= 'hidden' name='ID' value='$ID'>";
				echo '<input style="background-color: #FF9900" type="submit" size="49" name="name" value="Detalles"></form></td>';
				echo "</tr>";
			}
			echo "</tbody></table>";

			?>

			<br>
			<br>
		</br>
		<br>
	</br>
	<div>
		<!-- muesrta el año y el pie de a pagina-->
		<p class="pull-left">&copy; <?php echo date('Y') ?> Copyright © . All Rights Reserved.</p>
	</div>
</div>
</body>
<script type="text/javascript">
//$("#productos").DataTable({"lengthMenu": [[6, 12, 24, 48, 96, -1], [6, 12, 24, 48, 96, "Todos"]],"pageLength":4}, "");

$(document).ready(function() {
    var table = $('#productos').DataTable({"lengthMenu": [[6, 12, 24, 48, 96, -1], [6, 12, 24, 48, 96, "Todos"]],"pageLength":4}, "");

    $("#productos tfoot th").each( function ( i ) {
        var select = $('<select><option value="">All</option></select>')
            .appendTo( $(this).empty() )
            .on( 'change', function () {
                table.column( i )
                    .search( $(this).val() )
                    .draw();
            } );

        table.column( i ).data().unique().sort().each( function ( d, j ) {
            select.append( '<option value="'+d+'">'+d+'</option>' )
        } );
    } );
} );
</script>

</html>
