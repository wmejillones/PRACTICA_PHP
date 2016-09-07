<!DOCTYPE HTML>
<html lang="es">
<head>
  <meta content="text/html; charset=utf-8">
  <title>Tabla</title>
</head>
<body>
<center><h2>Utilizacion de "DEFINE"</h2>
<?php

	define(TAM,10);
	echo "<table border=1 WIDTH='500' HEIGHT='500'>";
	$n=1;

	for ($n1=1; $n1<=TAM; $n1++)
	{
		 if ($n1 % 2 == 0)
		 echo "<tr>";
		 else
		 echo "<tr bgcolor=yellow>";
			 for ($n2=1; $n2<=TAM; $n2++)
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