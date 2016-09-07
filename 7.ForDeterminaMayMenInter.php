<!DOCTYPE html>
<html lang="es">
<head>
  	<meta charset="utf-8" />
    <title>MAYOR O MENOR</title>                               
 </head>  

 <?php
	$numero1 =$_GET['txtn1'];
	$numero2 =$_GET['txtn2'];
	$numero3 =$_GET['txtn3'];

	// ENCONTRAR MAYOR MENOR E INTERMEDIO
	if($numero1>$numero2 && $numero1>$numero3) {
		$mayor=$numero1;
	}else{
		if ($numero2>$numero1 && $numero2>$numero3) {
			$mayor=$numero2;	
		}else{
			$mayor=$numero3;
		}                                               
	}                                                                            
	if($numero1<$numero2 && $numero1<$numero3){                                                       
		$menor=$numero1;
	}else{
		if($numero2<$numero1 && $numero2<$numero3){
			$menor=$numero2;
		}else{
			$menor=$numero3;
		}
	}

	$inter=($numero1+$numero2+$numero3)-($mayor+$menor)
?>                                                               
 <body>      
 
	<form method="get" action=""><center>
		<table width="258" border="0">
			<tr>
				<td colspan="2"><strong>Identificador de may, men y inetrmedio</strong></td>
			</tr>
			<tr>
				<td width="75">numero 1</td>
				<td width="151">
				 <input name="txtn1" type="text" id="txtn1" value=""/>
				</td>
			</tr>
			<tr>
				<td width="75">numero 2</td>
				<td>
				 <input name="txtn2" type="text" id="txtn2" value=""/>
				</td>
			</tr>
			<tr>
				<td>numero 3</td>
				<td>
				 <input name="txtn3" type="text" id="txtn3" value=""/>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>
				 <input name="btnCalcular" type="submit" id="btnCalcular" value="Calcular"/>
				</td>
			</tr>
		</center></table>
	</form>

	<?php

	echo "EL NUMERO MAYOR ES: "."$mayor"."<br><br>";
	echo "EL NUMERO MENOR ES: "."$menor"."<br><br>";
	echo "EL NUMERO INETERMEDIO ES: "."$inter"."<br><br>";
	?>

	<a href="index.php">Ir al inicio....</a>
 </body>                                                                 
 </html>