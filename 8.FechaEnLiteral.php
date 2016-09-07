<?php
	$dia=$_POST["dia"];
	$mes=$_POST["mes"];
	$año=$_POST["año"];

	echo "<h2>introduzca la fecha en forma numerica</h2>";

	if ($mes=="01"){
			echo "$dia de enero de $año";
	}
	if ($mes=="02"){
			echo "$dia de febrero de $año";
	}
	if ($mes=="03"){
			echo "$dia de marzo de $año";
	}
	if ($mes=="04"){
			echo "$dia de abril de $año";
	}
	if ($mes=="05"){
			echo "$dia de mayo de $año";
	}
	if ($mes=="06"){
			echo "$dia de junio de $año";
	}
	if ($mes=="07"){
			echo "$dia de julio de $año";
	}
	if ($mes=="08"){
			echo "$dia de agosto de $año";
	}
	if ($mes=="09"){
			echo "$dia de septiembre de $año";
	}
	if ($mes=="10"){
			echo "$dia de octubre de $año";;
	}
	if ($mes=="11"){
			echo "$dia de noviembre de $año";
	}
	if ($mes=="12"){
			echo "$dia de diciembre de $año";
	}
"<BR>"
?>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title></title>
</head>
<body>
	<form method="POST" action=" ">
		
			dia:
		 	<input name="dia" type="text" id="dia" value=""/><br>
			mes:
			<input name="mes" type="text" id="mes" value=""/><br>
			año:
		 	<input name="año" type="text" id="año" value=""/><br>
			
		<input name="btnfecha" type="submit" id="btnfecha" value="ir  a fecha"/>
		
	</form>
	<a href="index.php">Ir al inicio....</a>
</body>
</html>
