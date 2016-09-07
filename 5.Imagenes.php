<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>IMAGENES</title>
</head>

<body>
<center><H2>Directorio de imagenes</H2>
<?php

	if ($gestor = opendir('Images'))		
	{
	 echo "<table border=1 WIDTH='500' HEIGHT='500'>";
	 echo "<tr>";
	 $i=0;

	 while (false !== ($archivo = readdir($gestor)))  
	 {
	 		if ($archivo!="." && $archivo!="..")
	 		{

	 			if ($i==4)
	 			{
					 $i=0;
	 			  	echo "</tr>";
					 echo "<tr>";
	 			}
	 			$i++;
	 			echo "<td>";
	 			echo "<a href=Images/$archivo><img src=Images/$archivo width='200px'></a>";
			 	echo "</td>";
	 		}
	 }
	 echo "</tr>";
	 echo "</table>";
	 closedir($gestor);
	}
?>
</center>
<a href="index.php">Ir al inicio....</a>
</body>
</html>