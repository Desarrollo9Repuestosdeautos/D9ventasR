<?php
session_start();
session_destroy();
echo 'Cerraste sesión';
echo '<script> window.location="index2.php"; </script>';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

  </head>
  <body>
    <script language="javascript">location.href = "index2.php";</script>
  </body>
</html>
