<?php
  $eq1=$_POST['eq1'];
  $eq2=$_POST['eq2'];
  $eq3=$_POST['eq3'];
  $eq4=$_POST['eq4'];
  $eq5=$_POST['eq5'];
  $eq6=$_POST['eq6'];

	$entrada = array("$eq1", "$eq2", "$eq3", "$eq4", "$eq5", "$eq6");
	$claves_aleatorias = array_rand($entrada, 3);

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<TITLE>EQUIPOS</TITLE>
</head>
<body>
	<h1> FIXTURE EQUIPOS</h1>

	<form action=" " method="post"> 
		<!---->
		equipo 1:
		<input type="text" name="eq1" id="eq1"><br> 
		<!-- -->
		equipo 2:
		<input type="text" name="eq2"><br> 
		<!-- -->
		equipo 3:
		<input type="text" name="eq3"><br> 
		<!-- -->
		equipo 4:
		<input type="text" name="eq4"><br> 
		<!-- -->
		equipo 5:
		<input type="text" name="eq5"><br> 
		<!-- -->
		equipo 6:
		<input type="text" name="eq6"><br> 
		<!-- -->
	<input type="submit" value="generar fixture">
	</form>

	<form action=" ">
		<table width="258" border="0">
		    <tr>
		      <td><h1>fixture de partidos</h1></td>
		      <td> </td>
		    </tr>
		    <tr>
		      <td><?php echo $entrada[$claves_aleatorias[0]] . "\n";?></td> <!--muestra los valores de los arraysaleatorios-->
		      <td>vs</td>
		      <td><?php echo $entrada[$claves_aleatorias[1]] . "\n";?></td>
		    </tr>
		    <tr>
		    <tr>
		      <td><?php echo $entrada[$claves_aleatorias[0]] . "\n";?></td>
		      <td>vs</td>
		      <td><?php echo $entrada[$claves_aleatorias[2]] . "\n";?></td>
		    </tr>
		    <tr>
		      <td><?php echo $entrada[$claves_aleatorias[1]] . "\n";?></td>
		      <td>vs</td>
		      <td><?php echo $entrada[$claves_aleatorias[2]] . "\n";?></td>
		    </tr>

		  </table>
	 	<input type="submit" value="atras">
	</form>
	<a href="index.php">Ir al inicio....</a>
</body>
</html>