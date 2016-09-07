<!DOCTYPE HTML>
<html lang="es">
<head>
  <meta content="text/html; charset=utf-8">
  <title>Tabla 10x10</title>
</head>
<body>
<center><h2>Tabla de 10x10 con numeros del 1 al 100</h2>
<?php

	echo "<table border=1 WIDTH='500' HEIGHT='500'>";
	$n=1;
	for ($n1=1; $n1<=10; $n1++)
	{
	 echo "<tr>";
	 for ($n2=1; $n2<=10; $n2++)
	 {
	 echo "<td><center>", $n, "</td>";
	 $n=$n+1;
	 }
	 echo "</tr></center>";
	}
	echo "</table>";
?>
<a href="index.php">Ir al inicio....</a>
</body>
</html>