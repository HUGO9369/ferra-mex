<?php 

	$conexion=mysqli_connect('localhost','root','','ferreteria');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Datos de registro</title>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			<td>nombre</td>
			<td>apellidos</td>
			<td>correo</td>
			<td>telefono</td>	
		</tr>

		<?php 
		$sql="SELECT * from registro";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellidos'] ?></td>
			<td><?php echo $mostrar['correo'] ?></td>
			<td><?php echo $mostrar['telefono'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>