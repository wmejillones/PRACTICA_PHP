<!DOCTYPE HTML>
<html lang="es">
<head>
  <meta content="text/html; charset=utf-8">
  <title>Ajedrez</title>
</head>
<body>
<center><h2>Tablero de Ajedrez</h2>
<?php
	$a=0;
	echo "<table border=1 WIDTH='500' HEIGHT='500'>";
	for($e=1; $e<=8; $e++)
	{
		echo "<tr>";
		for($u=1; $u<=8; $u++)
		{
			if(($e+$u)%2==0)
			{
				echo "<td BGCOLOR='#000000' ><center><FONT COLOR='FFFFFF'>";
			}else
			{
				echo "<td BGCOLOR='#FFFFFF' ><center><FONT COLOR='000000'>";	
			}
			$a= $a+1;
			echo $a;
			echo "</center></td>";		
		}
			echo "</tr>";
	}
	echo "</table>";
?> 
<a href="index.php">Ir al inicio....</a>
</body>
</html>