<html>
<head>
<title>CONEXION</title>
</head>
<body>
  <?php
  $server = "localhost";
  $usuario = "root"; 
  $contraseña = "";
  $bd = "ferreteria";
  $conexion = mysqli_connect($server, $usuario, $contraseña, $bd) or die("error en la conexion"); 

  $Nombre= $_POST ['nombre'];
  $Apellidos = $_POST ['apellidos'];
  $Correo = $_POST ['correo'];
  $Telefono = $_POST ['telefono'];

  $insertar = "INSERT into registro values('$Nombre','$Apellidos','$Correo', '$Telefono')";
  $resultado = mysqli_query($conexion, $insertar)
  or die ("Error al insertar registros");

  mysqli_close($conexion);
  echo "datos insertados correctamente";

  ?>

</body>
</html>