<?php

include'db.php';
echo  conectar();
include 'PHPPaging.lib.php';

$select = new PHPPaging;

$select = mysql_query("SELECT * FROM  inventario2");
$select -> ejecutar();

while ($inventario = mysql_fetch_array($select))

{
     $nombre = $inventario ['nombre_producto'];
     $imagen = $inventario ['imagen1'];
    $precio = $inventario ['precio'];
    $codigo = $inventario ['codigo'];
      echo '<form class="" action="descripcion.php" method="post">';
      echo "<input type= 'hidden' name='codigo' value='$codigo'>";
      echo "<div id='pro'>";
      echo "<h2>";
      echo $nombre;
      echo "</h2>";

      echo "<br>";
      echo "<br>";
      echo "<img src = '$imagen' width ='100' height = '300'";
      echo "<br>";
      echo "<p>"; echo "$precio"; echo "</p>";
      echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
      echo "<br>";
      echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
      echo "  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";


      echo ' <input type="submit" name="name" value="detalle" ';
      echo "	</div>";
      echo "<div id='bigdivider'>";
      echo "</div>";

      echo "</div>";

      echo "</form>";


}

   echo $pagina->fetchNavegacion();

?>







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
