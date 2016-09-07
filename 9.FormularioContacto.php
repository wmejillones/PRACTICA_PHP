<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Formulario</title>
</head>

<body>
	<h2><center>Formulario de contacto</center></h2>
	<form action=" " method="post" name="form">
		<table align="center" width="400">
			<tr>
				<td>	<h3>Contactenos....</h3>	</td>
			</tr>

			<tr>
				<td>Nombre:		</td>
				<td><input type="text" name="nom" /></td>
			</tr>

			<tr>
				<td>apellido:</td>
				<td><input type="text" name="ap" />	</td>
			</tr>

			<tr>
					<td>E-Mail:		</td>
				<td> <input type="text" name="correo" />	</td>
			</tr>
			<tr>
					<td>Comentario:		</td>
				<td> <textarea name="com">	</textarea></td>
			</tr>
			<tr>
				<td><input type="submit" value="enviar" title="Ingresar Empleado"/>	</td>
			</tr>
		</table>
		<clear>
	</form>
	<a href="index.php">Ir al inicio....</a>
</body>
</html>
<?php

	$nom=$_POST["nom"];
	$ape=$_POST["ap"];
	$cor=$_POST["correo"];
	$com=$_POST["com"];

	echo "<h2>Tus datos son: ......</h2>";
	echo "nombre=> $nom <br>";
	echo "apellido=> $ape <br>";
	echo "correo=> $cor <br>";
	echo "coomentario=> $com <br>";

?>