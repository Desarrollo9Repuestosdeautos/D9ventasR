agregarConsulta("SELECT * FROM inventario2"); $pagina -> ejecutar(); // while ($inventario = mysql_fetch_array($select)) while ($res = $pagina->fetchResultado()) //echo "
"; //echo "
" { $nombre = $res ['nombre_producto']; $imagen = $res ['imagen1']; $precio = $res ['precio']; $codigo = $res ['codigo']; echo "
"; echo "
"; echo '
'; echo "
". $nombre ."
"; //echo $nombre; //echo ""; echo ""; echo "

". $precio ."
"; //echo "

"; echo "$precio"; echo "
"; echo "       "; // echo "
"; //echo "
"; echo "     "; echo "              "; echo ""; echo '
"; // echo "
"; //echo "
"; //echo "
"; //echo "
"; echo ""; echo "
"; echo "
"; } //echo $pagina->fetchNavegacion(); // echo "
"; //echo "
"; ?> fetchNavegacion(); ?>
