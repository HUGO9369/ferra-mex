<html>
<head>
<title>ELIMINAR</title>
</head>
<body
<?php
$server = "localhost";
  $usuario = "root"; 
  $contraseña = "";
  $bd = "ferreteria";
  $conexion = mysqli_connect($server, $usuario, $contraseña, $bd) or die("error en la conexion"); 
$Telefono = $_POST['telefono'];
mysqli_query($conexion, "DELETE from registro where telefono='$Telefono'") 
or die ("Error al eliminar los datos");
mysqli_close($conexion);
echo "Datos eliminados correctamente";
?>
</body>
</html>